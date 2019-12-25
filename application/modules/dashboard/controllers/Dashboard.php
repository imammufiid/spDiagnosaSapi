<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
	}

	public function index() {
		$this->sys->render_metronic('dashboard/index');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/administrator/Dashboard.php */