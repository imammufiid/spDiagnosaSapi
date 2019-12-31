<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamaster extends CI_Model {

	private $prov;
	private $kabkot;
	private $kec;
	private $keldes;

	function penyakit_get() {
		$db = $this->db->get('penyakit')->result_array();
		return $db;
	}
	function gejala_get() {
		$db = $this->db->get('gejala')->result_array();
		return $db;
	}

}

/* End of file M_datamaster.php */
/* Location: ./application/models/M_datamaster.php */