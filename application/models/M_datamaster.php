<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamaster extends CI_Model {

	private $prov;
	private $kabkot;
	private $kec;
	private $keldes;

	function penghasilanortu_get() {
		$db = $this->db->get('penghasilan_ortu')->result();
		return $db;
	}

	function domisili_get() {
		$db = $this->db->get('domisili')->result();
		return $db;
	}

	function jenkel_get() {
		$db = $this->db->get('jenis_kelamin')->result_array();
		return $db;
	}
	function cabang_get() {
		$db = $this->db->get('tb_cabang')->result_array();
		return $db;
	}
	function ranting_get() {
		$db = $this->db->get('tb_ranting')->result_array();
		return $db;
	}
	function sabuk_get() {
		$db = $this->db->get('tb_sabuk')->result_array();
		return $db;
	}
	function tingkat_get() {
		$db = $this->db->get('tb_tingkat_dan')->result_array();
		return $db;
	}

	function sekolah_get() {
		$db = $this->db->get('schools')->result_array();
		return $db;
	}
	
	function jnssekolah_get() {
		$db = $this->db->get('school_type')->result_array();
		return $db;
	}

	function agama_get() {
		$db = $this->db->get('agama')->result();
		return $db;
	}

	function prov_get() {
		if (!empty($this->prov)) $this->db->where('provinsi_code', $this->prov); 
		$db = $this->db->get('provinsi_view')->result();
		return $db;
	}

	function kabkot_get() {
		if (!empty($this->prov)) $this->db->where('provinsi_code', $this->prov); 
		if (!empty($this->kabkot)) $this->db->where('kabupatenkota_code', $this->kabkot); 
		$db = $this->db->get('kabupatenkota_view')->result();
		return $db;
	}

	function kec_get() {
		if (!empty($this->prov)) $this->db->where('provinsi_code', $this->prov); 
		if (!empty($this->kabkot)) $this->db->where('kabupatenkota_code', $this->kabkot); 
		if (!empty($this->kec)) $this->db->where('kecamatan_code', $this->kec); 
		$db = $this->db->get('kecamatan_view')->result();
		return $db;
	}

	function keldes_get() {
		if (!empty($this->prov)) $this->db->where('provinsi_code', $this->prov); 
		if (!empty($this->kabkot)) $this->db->where('kabupatenkota_code', $this->kabkot); 
		if (!empty($this->kec)) $this->db->where('kecamatan_code', $this->kec); 
		if (!empty($this->keldes)) $this->db->where('desakelurahan_code', $this->keldes); 
		$db = $this->db->get('desakelurahan_view')->result();
		return $db;
	}

	function set_area($_DATA = array()) {
		$this->prov = @$_DATA['prov'];
		$this->kabkot = @$_DATA['kabkot'];
		$this->kec = @$_DATA['kec'];
		$this->keldes = @$_DATA['keldes'];
		return $this;
	}

}

/* End of file M_datamaster.php */
/* Location: ./application/models/M_datamaster.php */