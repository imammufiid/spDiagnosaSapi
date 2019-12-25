<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_datamaster', 'dm');
	}

	public function guru() {
		$this->sys->render_metronic('guru');
	}

	public function siswa() {
		$this->sys->render_metronic('siswa');
	}

	public function modal($view) {
		$data = array();
		$this->sys->render_metronic_modal($view, $data);
	}

}

/* End of file Pelaporan.php */
/* Location: ./application/modules/pelaporan/controllers/Pelaporan.php */