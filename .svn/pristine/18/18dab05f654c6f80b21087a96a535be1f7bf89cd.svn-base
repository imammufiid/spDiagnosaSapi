<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	private $table;
	private $where;
	private $data_set;	

	//variabel khusus modal
	private $url;
	private $ajax_url;
	private $modal_url;
	private $table_columns;
	private $target_id;
	private $primary_id;
	private $primary_val;

	function set_table($table) {
		$this->table = $table;
		return $this;
	}

	function where($where) {
		$this->where['key'] = $where;
		$this->where['value'] = @$_POST[$where];
		return $this;
	}

	function set_data($data) {
		$this->data_set = $data;
		return $this;
	}

	function set_response($affected_rows = false, $delete = false) {
		$response;
		if ($delete) {
			if ($affected_rows) {
				$response = json_encode(array('status' => true, 'msg' => 'berhasil dihapus!'));
			} else {
				$response = json_encode(array('status' => false, 'msg' => 'gagal menghapus!'));
			}
		} else {
			if ($affected_rows) {
				$response = json_encode(array('status' => true, 'msg' => 'berhasil disimpan!'));
			} else {
				$response = json_encode(array('status' => false, 'msg' => 'gagal menyimpan!'));
			}
		}
		return $response;
	}

	function crud($parameter = 'read') {
		$response = array();
		$affected_rows = 0;

		switch ($parameter) {

			case 'save':
				if (empty($this->where['value'])) {
					$this->db->set($this->data_set);
					$this->db->insert($this->table);
					$affected_rows = $this->db->affected_rows();
					$response = $this->set_response($affected_rows);
				} else {
					$this->db->set($this->data_set);
					$this->db->where($this->where['key'], $this->where['value']);
					$this->db->update($this->table);
					$affected_rows = $this->db->affected_rows();
					$response = $this->set_response($affected_rows);
				}
			break;

			case 'insert':
				$this->db->set($this->data_set);
				$this->db->insert($this->table);
				$affected_rows = $this->db->affected_rows();
				$response = $this->set_response($affected_rows);
			break;

			case 'update':
				$this->db->set($this->data_set);
				$this->db->where($this->where['key'], $this->where['value']);
				$this->db->update($this->table);
				$affected_rows = $this->db->affected_rows();
				$response = $this->set_response($affected_rows);
			break;

			case 'delete':
				$this->db->where($this->where['key'], $this->where['value']);
				$this->db->delete($this->table);
				$affected_rows = $this->db->affected_rows();
				$response = $this->set_response($affected_rows, TRUE);
			break;

			case 'read':
				if(!empty($this->where)) $this->db->where($this->where['key'], $this->where['value']);
				$response = $this->db->get($this->table);
			break;
		}

		return $response;
	}

	//function khusus modal

	function set_url($url) {
		$this->url = $url;
		return $this;
	}

	function set_ajax_url($ajax_url) {
		$this->ajax_url = $ajax_url;
		return $this;
	}

	function set_modal_url($modal_url) {
		$this->modal_url = $modal_url;
		return $this;
	}

	function set_table_columns($data = array()) {
		foreach ($data as $key => $var) {
			$this->table_columns .= "{data: '$var'},".PHP_EOL;
		}
	}

	function set_target_id($target_id) {
		$this->target_id = $target_id;
		return $this;
	}

	function set_primary_id($primary_id) {
		$this->primary_id = $primary_id;
		return $this;
	}

	function set_primary_val($primary_val) {
		$this->primary_val = $primary_val;
		return $this;
	}

	function generate_crud_modal() {
		$data['url'] = $this->url;
		$data['ajax_url'] = $this->ajax_url;
		$data['modal_url'] = $this->modal_url;
		$data['table_columns'] = $this->table_columns;
		$data['target_id'] = $this->target_id;
		$data['primary_id'] = $this->primary_id;
		$data['primary_val'] = $this->primary_val;
		return $this->load->view('crud/modal', $data, true);
	}

}

/* End of file M_crud.php */
/* Location: ./application/models/M_crud.php */