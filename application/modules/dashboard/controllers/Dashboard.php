<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->library('datatables', null, 'dt');
	}

	public function index()
	{
		$penyakit = $this->db->get('penyakit')->result_array();
		// var_dump(json_encode($penyakit));die();
		foreach ($penyakit as $key => $val) {
			$nama_pkt[] = $val['nama_penyakit'];
		}
		$data['penyakit'] = $penyakit;
		$data['namapkt'] = json_encode($nama_pkt);

		$aktf = $this->db->get('v_aktifitas')->result_array();
		foreach ($aktf as $key => $val) {
			$num[$val['kode_penyakit']] = date('m', strtotime($val['tanggal'])) == date('m') ? $this->db->get_where('v_aktifitas', ['kode_penyakit' => $val['kode_penyakit']])->num_rows() : 0;
		};
		$data['count'] = $num;
		$this->sys->render_metronic('dashboard/index', $data);
	}

	public function tes()
	{
		echo $this->dt->generate_json('penyakit');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/administrator/Dashboard.php */
