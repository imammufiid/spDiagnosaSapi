<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_system extends CI_Model {

	private $user = '_sys_user';
	private $v_user = '_v_sys_user';
	private $sidebar = '_sys_sidebar';
	private $v_sidebar = '_v_sys_sidebar';
	private $navbar = '_sys_navbar';
	private $v_navbar = '_v_sys_navbar';
	private $setting = '_sys_setting';
	private $group = '_sys_group';
	private $sidebar_access = '_sys_sidebar_access';
	private $navbar_access = '_sys_navbar_access';
	private $dt;

	//--------------------- User Model ----------------

	function user_get($user_id='') {
		if (!empty($user_id)) {
			$this->db->where('user_id', $user_id);
			return $this->db->get($this->user)->row();
		} else {
			return $this->db->get($this->v_user)->result_array();
		}
	}

	function user_check($data = array()) {
		$response = array('status' => true, 'msg' => 'semua tersimpan!');
		$check_username = $this->db->where('user_username', $data['user_username'])->get($this->user)->num_rows();
		$check_email = $this->db->where('user_email', $data['user_email'])->get($this->user)->num_rows();
		
		if (!empty(@$data['user_password']) || !empty(@$data['user_password_confirm'])) {
			if ($data['user_password'] != $data['user_password_confirm']) {
				$response = array('status' => false, 'msg' => 'password tidak sesuai!');
				goto response;
			}
		}

		if ($check_username > 0) {
			if ($this->user_update_check($data)['username']) {
				$response = array('status' => true, 'msg' => 'semua tersimpan!');
				goto cek_email;
			}

			$response = array('status' => false, 'msg' => 'username telah digunakan!');
			goto response;
		}

		cek_email:
		if ($check_email > 0) {
			if ($this->user_update_check($data)['email']) {
				$response = array('status' => true, 'msg' => 'semua tersimpan!');
				goto response;
			}
			$response = array('status' => false, 'msg' => 'email telah digunakan!');
		}

		response:
		return $response;
	}

	function user_update_check($data) {
		$check_user_username = (!empty(@$data['user_id'])) ? $this->db->where('user_id', $data['user_id'])->where('user_username', $data['user_username'])->get($this->user)->num_rows() : 0;
		$check_user_email = (!empty(@$data['user_id'])) ? $this->db->where('user_id', $data['user_id'])->where('user_email', $data['user_email'])->get($this->user)->num_rows() : 0;
		if (($check_user_username || $check_user_email) && !empty(@$data['user_id'])) {
			return array('username' => $check_user_username, 'email' => $check_user_email);
		} else {
			return array('username' => 0, 'email' => 0);
		}
	}

	function user_save($data = array()) {
		unset($data['user_password_confirm']);

		if (!empty(@$data['user_password'])) {
			$data['user_password'] = md5($data['user_password']);
		} else {
			unset($data['user_password']);
		}

		$this->db->set($data);
		if (!empty(@$data['user_id'])) {
			$this->db->where('user_id', $data['user_id']);
			$this->db->update($this->user);
		} else {
			$this->db->insert($this->user);
		}

		return $this->db->affected_rows();
	}

	function user_delete($user_id='') {
		$this->db->where('user_id', $user_id);
		$this->db->delete($this->user);
		return $this->db->affected_rows();
	}

	//--------------------- Group Model ----------------

	function group_get($group_id='') {
		$db = array();
		if (empty($group_id)) {
			$db = $this->db->get('_sys_group')->result_array();
		} else {
			$db = $this->db->where('group_id', $group_id);
			$db = $this->db->get('_sys_group')->row();
		}
		return $db;
	} 

	function group_save() {
		$this->db->set('group_label', $_POST['group_label']);

		if (!empty(@$_POST['group_id'])) {
			$this->db->where('group_id', $_POST['group_id']);
			$this->db->update($this->group);
			return $_POST['group_id'];
		} else {
			$this->db->insert($this->group);
			return $this->db->insert_id();
		}
	}

	function group_set_acces($group_id) {
		$this->db->where('sidebar_access_group_id', $group_id)->delete($this->sidebar_access);
		$this->db->where('navbar_access_group_id', $group_id)->delete($this->navbar_access);
		foreach ($_POST['sidebar_access_sidebar_id'] as $key => $var) {
			$sidebar['sidebar_access_group_id'] = $group_id;
			$sidebar['sidebar_access_sidebar_id'] = $var;
			$sidebar['sidebar_access_read'] 	= (!empty(@$_POST['sidebar_access_read'][$var])) ? '1' : '0';
			$sidebar['sidebar_access_create'] 	= (!empty(@$_POST['sidebar_access_create'][$var])) ? '1' : '0';
			$sidebar['sidebar_access_update'] 	= (!empty(@$_POST['sidebar_access_update'][$var])) ? '1' : '0';
			$sidebar['sidebar_access_delete']	= (!empty(@$_POST['sidebar_access_delete'][$var])) ? '1' : '0';
			$this->db->set($sidebar)->insert($this->sidebar_access);
		}
		if (sizeof(@$_POST['navbar_access_navbar_id']) > 0) {
			foreach ($_POST['navbar_access_navbar_id'] as $key => $var) {
				$navbar['navbar_access_group_id'] = $group_id;
				$navbar['navbar_access_navbar_id'] = $var;
				$navbar['navbar_access_read'] 	= (!empty(@$_POST['navbar_access_read'][$var])) ? '1' : '0';
				$navbar['navbar_access_create'] 	= (!empty(@$_POST['navbar_access_create'][$var])) ? '1' : '0';
				$navbar['navbar_access_update'] 	= (!empty(@$_POST['navbar_access_update'][$var])) ? '1' : '0';
				$navbar['navbar_access_delete']	= (!empty(@$_POST['navbar_access_delete'][$var])) ? '1' : '0';
				$this->db->set($navbar)->insert($this->navbar_access);
			}
		}
		return $this->db->affected_rows();
	}

	function group_delete($group_id='') {
		$this->db->where('group_id', $group_id)->delete($this->group);
		return $this->db->affected_rows();
	}

	//--------------------- Sidebar Model ----------------

	function sidebar_get($sidebar_id = 0) {
		if (!empty($sidebar_id)) {
			$this->db->where('sidebar_id', $sidebar_id);
			return $this->db->get($this->sidebar)->row();
		} else {
			return $this->db->get($this->v_sidebar)->result_array();
		}
	}

	function sidebar_save() {
		$response = array('status' => true, 'msg' => 'semua tersimpan!');
		$this->db->set($_POST);
		if (!empty(@$_POST['sidebar_id'])) {
			$this->db->where('sidebar_id', $_POST['sidebar_id']);
			$this->db->update($this->sidebar);
			if (!$this->db->affected_rows()) {
				$response = array('status' => false, 'msg' => 'gagal menyimpan!');
			}
		} else {
			$this->db->insert($this->sidebar);
		}
		return $response;
	}

	function sidebar_delete($sidebar_id='') {
		$this->db->where('sidebar_id', $sidebar_id);
		$this->db->delete($this->sidebar);
		return $this->db->affected_rows();
	}

	//--------------------- Navbar Model ---------------------

	function navbar_get($navbar_id = 0) {
		if (!empty($navbar_id)) {
			$this->db->where('navbar_id', $navbar_id);
			return $this->db->get($this->navbar)->row();
		} else {
			return $this->db->get($this->v_navbar)->result_array();
		}
	}

	function navbar_save() {
		$response = array('status' => true, 'msg' => 'semua tersimpan!');
		$this->db->set($_POST);
		if (!empty(@$_POST['navbar_id'])) {
			$this->db->where('navbar_id', $_POST['navbar_id']);
			$this->db->update($this->navbar);
			if (!$this->db->affected_rows()) {
				$response = array('status' => false, 'msg' => 'gagal menyimpan!');
			}
		} else {
			$this->db->insert($this->navbar);
		}
		return $response;
	}

	function navbar_delete($navbar_id='') {
		$this->db->where('navbar_id', $navbar_id);
		$this->db->delete($this->navbar);
		return $this->db->affected_rows();
	}

	//--------------------- Settings Model -------------------

	function setting_get() {
		$db = $this->db->get($this->setting)->row();
		return $db;
	}

	function setting_save() {
		$this->db->set($_POST);
		$this->db->update($this->setting);
		return $this->db->affected_rows();
	}
}

/* End of file M_system.php */
/* Location: ./application/models/administrator/M_system.php */