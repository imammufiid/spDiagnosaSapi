<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_datamaster', 'dm');
		$this->load->model('m_siswa', 'm');
		$this->load->model('m_crud', 'crud');
	}

	public function index() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('index');
	}

	public function fetch() {
		$this->dt->add_column('siswa_tptg_lahir', '$1', '$this->date_lahir_id(siswa_tp_lahir, siswa_tg_lahir)');
		print_r($this->dt->generate_json('v_siswa'));
	}

	public function riwayatpendidikan_fetch($siswa_id=0) {
		$this->dt->select('*');
		$this->dt->from('v_siswa_pendidikan');
		$this->dt->where('siswa_id', $siswa_id);
		echo $this->dt->generate();
	}

	public function riwayatpendidikan_save() {
		$response = $this->m->riwayatpendidikan_save();
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil disimpan!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal menyimpan!')));
		}
	}

	public function riwayatpendidikan_delete() {
		$response = $this->m->riwayatpendidikan_delete();
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil dihapus!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal menghapus!')));
		}
	}

	public function daftarpenghargaan_fetch($siswa_id=0) {
		$this->dt->select('*');
		$this->dt->from('siswa_daftar_penghargaan');
		$this->dt->where('siswa_id', $siswa_id);
		echo $this->dt->generate();
	}

	public function daftarbeasiswa_fetch($siswa_id=0) {
		$this->dt->select('*');
		$this->dt->from('siswa_daftar_beasiswa');
		$this->dt->where('siswa_id', $siswa_id);
		echo $this->dt->generate();
	}

	public function daftarbeasiswa_save() {
		$this->crud->set_table('siswa_daftar_beasiswa');
		$this->crud->set_data($_POST);
		$this->crud->where('siswa_beasiswa_id');
		echo $this->crud->crud('save');
	}

	public function daftarbeasiswa_delete() {
		$this->crud->set_table('siswa_daftar_beasiswa');
		$this->crud->where('siswa_beasiswa_id');
		echo $this->crud->crud('delete');
	}

	public function daftarpenghargaan_save() {
		$this->crud->set_table('siswa_daftar_penghargaan');
		$this->crud->set_data($_POST);
		$this->crud->where('siswa_penghargaan_id');
		echo $this->crud->crud('save');
	}

	public function daftarpenghargaan_delete() {
		$this->crud->set_table('siswa_daftar_penghargaan');
		$this->crud->where('siswa_penghargaan_id');
		echo $this->crud->crud('delete');
	}

	public function datadiri_save() {
		$response = $this->m->datadiri_save();
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil disimpan!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal menyimpan!')));
		}
	}

	public function modal($view) {
		$area = array(
			"prov" => '35',
			"kabkot" => '72',
		);
		$this->dm->set_area($area);
		$data['domisili'] = $this->m->domisili_get();
		$data['penghasilan_ortu'] = $this->m->penghasilanortu_get();
		$data['siswa'] = $this->db->where('siswa_nisn', @$_GET['siswa_nisn'])->get('v_siswa')->row();
		$data['jenkel'] = $this->dm->jenkel_get();
		$data['kepegawaian'] = $this->dm->kepegawaian_get();
		$data['sertifikasi'] = $this->dm->sertifikasi_get();
		$data['sekolah'] = $this->dm->sekolah_get();
		$data['agama'] = $this->dm->agama_get();
		$data['prov'] = $this->dm->prov_get();
		$data['kabkot'] = $this->dm->kabkot_get();
		$data['kec'] = $this->dm->kec_get();
		$data['keldes'] = $this->dm->keldes_get();

		$this->sys->render_metronic_modal($view, $data);
	}

	public function show($siswa_id = null) {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');

		$this->sys->set_url('siswa');

		$area = array(
			"prov" => '35',
			"kabkot" => '72',
		);
		$this->dm->set_area($area);

		$data['jenkel'] = $this->dm->jenkel_get();
		$data['domisili'] = $this->m->domisili_get();
		$data['kepegawaian'] = $this->dm->kepegawaian_get();
		$data['sertifikasi'] = $this->dm->sertifikasi_get();
		$data['sekolah'] = $this->dm->sekolah_get();
		$data['agama'] = $this->dm->agama_get();
		$data['prov'] = $this->dm->prov_get();
		$data['kabkot'] = $this->dm->kabkot_get();
		$data['kec'] = $this->dm->kec_get();
		$data['keldes'] = $this->dm->keldes_get();
		$this->siswa_id = $siswa_id;

		$this->sys->render_metronic('show', $data);
	}

	public function add() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');

		$this->sys->set_url('siswa');

		$area = array(
			"prov" => '35',
			"kabkot" => '72',
		);
		$this->dm->set_area($area);

		$data['jenkel'] = $this->dm->jenkel_get();
		$data['domisili'] = $this->m->domisili_get();
		$data['kepegawaian'] = $this->dm->kepegawaian_get();
		$data['sertifikasi'] = $this->dm->sertifikasi_get();
		$data['sekolah'] = $this->dm->sekolah_get();
		$data['agama'] = $this->dm->agama_get();
		$data['prov'] = $this->dm->prov_get();
		$data['kabkot'] = $this->dm->kabkot_get();
		$data['kec'] = $this->dm->kec_get();
		$data['keldes'] = $this->dm->keldes_get();

		$this->sys->render_metronic('add', $data);
	}

}

/* End of file siswa.php */
/* Location: ./application/modules/siswa/controllers/siswa.php */