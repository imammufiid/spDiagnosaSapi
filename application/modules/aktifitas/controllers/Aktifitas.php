<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{

	private $guru_id;

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		// $db2 = $this->load->database('db-kedua', true);
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_datamaster', 'dm');
		$this->load->model('m_aktifitas', 'm');
		$this->load->model('m_crud', 'crud');
	}

	public function index()
	{
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('index');
	}

	public function fetch()
	{
		print_r($this->dt->generate_json('hasil'));
	}

	public function get()
	{
		$gejala   = $this->m->get_datatables();
		$this->db->from('penyakit');
		$this->db->order_by('kode_penyakit', 'ASC');
		$penyakit = $this->db->get()->result();

		foreach ($penyakit as $key => $valp) {
			$arpkt[$valp->kode_penyakit] = $valp->nama_penyakit;
			$ardpkt[$valp->kode_penyakit] = $valp->det_penyakit;
			$arspkt[$valp->kode_penyakit] = $valp->srn_penyakit;
		}

		$data = array();
		$no = $_POST['start'];
		$detail = '';
		foreach ($gejala as $field) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $field->tanggal;
			$row[] = $field->nama_penyakit;
			$row[] = $field->hasil_nilai;
			$row[] .= "<a type='button' class='btn btn-success btn-sm' target='_blank' href='" . base_url('aktifitas/detail/') . $field->id_hasil . "'><i class='fa fa-eye' aria-hidden='true'></i> Detail </a>";

			// $row[] = $detail;
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

	public function detail($id)
	{
		// echo $id;
		$arcolor = array('#ffffff', '#cc66ff', '#019AFF', '#00CBFD', '#00FEFE', '#A4F804', '#FFFC00', '#FDCD01', '#FD9A01', '#FB6700');
		$inptanggal = date('Y-m-d H:i:s');

		$arbobot = array('0', '1', '0.8', '0.6', '0.4', '-0.2', '-0.4', '-0.6', '-0.8', '-1');
		$data['argejala'] = array();

		// for ($i = 0; $i < count($_POST['kondisi']); $i++) {
		// 	$arkondisi = explode("_", $_POST['kondisi'][$i]);
		// 	if (strlen($_POST['kondisi'][$i]) > 1) {
		// 		$data['argejala'] += array($arkondisi[0] => $arkondisi[1]);
		// 	}
		// }

		$this->db->from('kondisi');
		$this->db->order_by('id', 'ASC');
		$sqlkondisi = $this->db->get()->result();
		foreach ($sqlkondisi as $key => $val) {
			$arkondisitext[$val->id] = $val->kondisi;
		}
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

		$sqlhasil = $this->db->get_where('hasil', ['id_hasil' => $id])->result_array();
		foreach ($sqlhasil as $key => $val) {
			$arpenyakit = unserialize($val['penyakit']);
			$argejala = unserialize($val['gejala']);
		}
		// var_dump($arpenyakit);die();
		$data['arpenyakit'] = $arpenyakit;
		$data['argejala'] = $argejala;
		$np1 = 0;
		foreach ($arpenyakit as $key1 => $value1) {
			$np1++;
			$idpkt1[$np1] = $key1;
			$vlpkt1[$np1] = $value1;
		}

		$this->sys->render_metronic('detail', $data);
	}
}

/* End of file Guru.php */
/* Location: ./application/modules/guru/controllers/Guru.php */
