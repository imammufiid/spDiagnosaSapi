<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_datamaster', 'dm');
		$this->load->model('m_diagnosa', 'm');
		$this->load->model('m_kondisi', 'mk');
		$this->load->model('m_crud', 'crud');
	}

	public function index()
	{
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');

		$this->sys->render_metronic('index');
	}

	// public function fetch()
	// {
	//   $this->dt->add_column('kondisi', '$1', '$this->date_lahir_id(guru_tp_lahir, guru_tg_lahir)');
	// 	print_r($this->dt->generate_json('gejala'));
	// }

	public function get()
	{
		$gejala = $this->m->get_datatables();
		$kds = $this->mk->get_datatables();
		// var_dump($kondisi);die();
		$data = array();
		$kondisi = '';
		$kondisi = '<select class="form-control" name="kondisi[]"><option value selected disabled>-- Pilih jika sesuai --</option>';
		if (is_array($kds) || is_object($kds)) {
			foreach ($kds as $val) {
				$kondisi .= '<option value="' . $val->id . '">' . $val->kondisi . '</option>';
			}
		}
		$kondisi .= '</select>';
		$no = $_POST['start'];
		foreach ($gejala as $field) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = 'G' . str_pad($field->kode_gejala, 3, '0', STR_PAD_LEFT);
			$row[] = $field->nama_gejala;
			$kondisi = '<select class="form-control opsikondisi" name="kondisi[]" id="sl' . $no . '"><option value selected disabled>-- Pilih jika sesuai --</option>';
			if (is_array($kds) || is_object($kds)) {
				foreach ($kds as $val) {
					$kondisi .= '<option value="' . $field->kode_gejala . '_' . $val->id . '">' . $val->kondisi . '</option>';
				}
			}
			$kondisi .= '</select>';

			$row[] = $kondisi;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m->count_all(),
			"recordsFiltered" => $this->m->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	public function submit()
	{
		$arcolor = array('#ffffff', '#cc66ff', '#019AFF', '#00CBFD', '#00FEFE', '#A4F804', '#FFFC00', '#FDCD01', '#FD9A01', '#FB6700');
		$inptanggal = date('Y-m-d H:i:s');

		$arbobot = array('0', '1', '0.8', '0.6', '0.4', '-0.2', '-0.4', '-0.6', '-0.8', '-1');
		$data['argejala'] = array();
		// var_dump($_POST);
		if (!isset($_POST['kondisi'])) {
			$this->session->set_flashdata('msg', 'Masukkan kondisi dari beberapa gejala dibawah');
			redirect(base_url('diagnosa/'));
		}
		for ($i = 0; $i < count($_POST['kondisi']); $i++) {
			$arkondisi = explode("_", $_POST['kondisi'][$i]);
			if (strlen($_POST['kondisi'][$i]) > 1) {
				$data['argejala'] += array($arkondisi[0] => $arkondisi[1]);
			}
		}

		$this->db->from('kondisi');
		$this->db->order_by('id', 'ASC');
		$sqlkondisi = $this->db->get()->result();
		foreach ($sqlkondisi as $key => $val) {
			$arkondisitext[$val->id] = $val->kondisi;
			$arkondisiid[$val->id] = $val->bobot;
		}
		// var_dump($arkondisiid[1]);
		$data['kondisitext'] = $arkondisitext;

		$this->db->from('penyakit');
		$this->db->order_by('kode_penyakit', 'ASC');
		$sqlpkt = $this->db->get()->result();
		foreach ($sqlpkt as $key => $val) {
			$arpkt[$val->kode_penyakit] = $val->nama_penyakit;
			$ardpkt[$val->kode_penyakit] = $val->det_penyakit;
			$arspkt[$val->kode_penyakit] = $val->srn_penyakit;
			$argpkt[$val->kode_penyakit] = $val->gambar;
		}
		$data['arpkt'] = $arpkt;
		$data['ardpkt'] = $ardpkt;
		$data['arspkt'] = $arspkt;
		$data['argpkt'] = $argpkt;


		// -------- perhitungan certainty factor (CF) ---------
		// --------------------- START ------------------------
		$arpenyakit = array();
		foreach ($sqlpkt as $key => $var) {
			$cftotal_temp = 0;
			$cf = 0;
			$sqlgejala = $this->db->get_where('basis_pengetahuan', ['kode_penyakit' => $var->kode_penyakit])->result();
			$cflama = 0;
			// var_dump($sqlgejala);die();

			foreach ($sqlgejala as $key => $val) {
				$arkondisi = explode("_", $_POST['kondisi'][0]);
				$gejala = $arkondisi[0];

				for ($i = 0; $i < count($_POST['kondisi']); $i++) {
					$arkondisi = explode("_", $_POST['kondisi'][$i]);
					// var_dump($arkondisiid[$arkondisi[1]]);
					// var_dump($arbobot[$arkondisi[1]]);die();
					$gejala = $arkondisi[0];
					if ($val->kode_gejala == $gejala) {
						// cf = cfPakar * cfUser
						$cf = ($val->mb - $val->md) * $arkondisiid[$arkondisi[1]];
						if (($cf >= 0) && ($cf * $cflama >= 0)) {
							$cflama = $cflama + ($cf * (1 - $cflama));
						}
						if ($cf * $cflama < 0) {
							$cflama = ($cflama + $cf) / (1 - Min(abs($cflama), abs($cf)));
						}
						if (($cf < 0) && ($cf * $cflama >= 0)) {
							$cflama = $cflama + ($cf * (1 + $cflama));
						}
					}
				}
			}

			if ($cflama > 0) {
				$arpenyakit += array($var->kode_penyakit => number_format($cflama, 4));
			}
		}
		$data['arpenyakit'] = $arpenyakit;
		arsort($arpenyakit);
		$data['arpenyakit'] = $arpenyakit;
		$inpgejala = serialize($data['argejala']);
		$inppenyakit = serialize($arpenyakit);
		$np1 = 0;
		foreach ($arpenyakit as $key1 => $value1) {
			$np1++;
			$idpkt1[$np1] = $key1;
			$vlpkt1[$np1] = $value1;
		}
		$arr = [
			'tanggal' => $inptanggal,
			'gejala'  => $inpgejala,
			'penyakit' => $inppenyakit,
			'hasil_id' => $idpkt1[1],
			'hasil_nilai' => $vlpkt1[1]
		];
		$this->db->insert('hasil', $arr);
		$this->sys->render_metronic('hasil', $data);
	}
}

/* End of file Guru.php */
/* Location: ./application/modules/guru/controllers/Guru.php */
