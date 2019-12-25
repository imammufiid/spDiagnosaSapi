<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->model('m_system', 'm');
	}

	public function index() {
		$user_id = $this->session->userdata('user_id');
		$data['_page_title'] = "Edit Profile";
		$data['users'] = $this->m->user_get($user_id);
		$this->sys->render_metronic('profile/index', $data);
	}

	public function update() {
		$_POST['user_id'] = $this->session->userdata('user_id');
		$user_check = $this->m->user_check($_POST);
		if ($user_check['status']) {
			$this->m->user_save($_POST);
			$data['name'] = $_POST['user_firstname']." ".$_POST['user_lastname'];
			$this->session->set_userdata( $data );
		}
		print_r(json_encode($user_check));
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */