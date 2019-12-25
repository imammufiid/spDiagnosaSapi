<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	function daftarbeasiswa_save() {
		$this->db->set($_POST);
		
		if (!empty(@$_POST['siswa_beasiswa_id'])) {
			$this->db->where('siswa_beasiswa_id', $_POST['siswa_beasiswa_id']);
			$this->db->update('siswa_daftar_beasiswa');
		} else {
			$this->db->insert('siswa_daftar_beasiswa');
		}

		return $this->db->affected_rows();
	}

	function daftarbeasiswa_delete() {
		$this->db->where('siswa_beasiswa_id', $_POST['siswa_beasiswa_id']);
		$this->db->delete('siswa_daftar_beasiswa');
		return $this->db->affected_rows();
	}

	function daftarpenghargaan_save() {
		$this->db->set($_POST);
		
		if (!empty(@$_POST['siswa_penghargaan_id'])) {
			$this->db->where('siswa_penghargaan_id', $_POST['siswa_penghargaan_id']);
			$this->db->update('siswa_daftar_penghargaan');
		} else {
			$this->db->insert('siswa_daftar_penghargaan');
		}

		return $this->db->affected_rows();
	}

	function daftarpenghargaan_delete() {
		$this->db->where('siswa_penghargaan_id', $_POST['siswa_penghargaan_id']);
		$this->db->delete('siswa_daftar_penghargaan');
		return $this->db->affected_rows();
	}

	function datadiri_save() {
		$this->db->set($_POST);
		
		if (!empty(@$_POST['siswa_id'])) {
			$this->db->where('siswa_id', $_POST['siswa_id']);
			$this->db->update('siswa');
		} else {
			$this->db->insert('siswa');
		}

		return $this->db->affected_rows();
	}

	function domisili_get() {
		$db = $this->db->get('domisili')->result();
		return $db;
	}

	function penghasilanortu_get() {
		$db = $this->db->get('penghasilan_ortu')->result();
		return $db;
	}

	function riwayatpendidikan_save() {
		$this->db->set($_POST);
		if (!empty(@$_POST['siswa_pendidikan_id'])) {
			$this->db->where('siswa_pendidikan_id', $_POST['siswa_pendidikan_id']);
			$this->db->update('siswa_riwayat_pendidikan');
		} else {
			$this->db->insert('siswa_riwayat_pendidikan');
		}
		return $this->db->affected_rows();
	}

	function riwayatpendidikan_delete() {
		$this->db->where('siswa_pendidikan_id', $_POST['siswa_pendidikan_id']);
		$this->db->delete('siswa_riwayat_pendidikan');
		return $this->db->affected_rows();
	}

}

/* End of file M_siswa.php */
/* Location: ./application/modules/siswa/models/M_siswa.php */