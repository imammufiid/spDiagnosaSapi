<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->model('m_datamaster', 'dm');
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_diagnosa', 'm');
	}

	public function index() {
		$this->db->from('gejala');
		$this->db->order_by('kode_gejala', 'ASC');
		$data['gejala'] = $this->db->get()->result();
		
		$this->db->from('kondisi');
		$this->db->order_by('id', 'ASC');
		$data['kondisi'] = $this->db->get()->result();
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('index', $data);
	}

	public function fetch(){
		print_r($this->dt->generate_json('gejala'));
	}

	public function get(){
			$list = $this->m->get_datatables();
			var_dump($list);die();
			$data = array();
			$no = $_POST['start'];
			$no = 0;
			foreach ($list as $field) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $field->kode_gejala;
				$row[] = $field->nama_gejala;
				$row[] = 1;
				$data[] = $row;
			}
	
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->model_funding->count_all(),
				"recordsFiltered" => $this->model_funding->count_filtered(),
				"data" => $data,
			);
			//output dalam format JSON
			echo json_encode($output);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/administrator/Dashboard.php */