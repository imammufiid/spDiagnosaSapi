<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	function check_login($data) {
		$data['password'] = md5($data['password']);
		$db = $this->db->where("(user_username = '$data[email]' or user_email = '$data[email]')");
		$db = $this->db->where("user_password", $data['password']);
		$db = $this->db->get('_v_sys_user');
		return $db;
	}

	function set_userdata($data) {
		$array = array(
			'name' => $data->user_firstname." ".$data->user_lastname,
			'user_id' => $data->user_id,
			'group_id' => $data->user_group_id,
			'is_logged_in' => true,
		);
		
		$this->session->set_userdata( $array );
	}

}

/* End of file M_auth.php */
/* Location: ./application/models/administrator/M_auth.php */