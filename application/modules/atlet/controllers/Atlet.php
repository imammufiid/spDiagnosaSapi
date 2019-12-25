<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atlet extends CI_Controller
{

	private $guru_id;

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->library('datatables', null, 'dt');
		$this->load->model('m_datamaster', 'dm');
		$this->load->model('m_atlet', 'm');
		$this->load->model('m_crud', 'crud');
	}

	public function index()
	{
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('index');
	}

	public function fetch()
	{
		// $this->dt->select('*');
		// $this->dt->from('v_atlets');
		// $this->dt->where('id_cabang', $this->session->userdata());
		// echo $this->dt->generate();
		print_r($this->dt->generate_json('v_atlets'));
	}

	public function pendidikan_fetch($guru_id)
	{
		$this->dt->select('*');
		$this->dt->from('v_guru_pendidikan');
		$this->dt->where('guru_id', $guru_id);
		echo $this->dt->generate();
	}

	public function datadiri_save()
	{
		$response = $this->m->datadiri_save();
		if ($response) {
			echo json_encode(array('status' => true, 'msg' => 'berhasil disimpan!'));
		} else {
			echo json_encode(array('status' => false, 'msg' => 'gagal menyimpan!'));
		}
	}

	public function datadiri_delete(){
		$this->crud->set_table('tb_atlets');
		$this->crud->where('id');
		echo $this->crud->crud('delete');
	}

	public function modal($view)
	{
		$data['atlet'] = $this->db->where('id', @$_GET['id'])->get('tb_atlets')->row();
		$data['editAtlet'] = $this->db->where('id', @$_GET['id'])->get('tb_atlets')->row();
		$data['jenkel'] = $this->dm->jenkel_get();
		$data['cabang'] = $this->dm->cabang_get();
		$data['ranting'] = $this->dm->ranting_get();
		$data['sabuk'] = $this->dm->sabuk_get();
		$data['jnssekolah'] = $this->dm->jnssekolah_get();
		$data['sabuk'] = $this->dm->sabuk_get();
		$data['sekolah'] = $this->dm->sekolah_get();

		$this->sys->render_metronic_modal($view, $data);
	}

	public function show($guru_id = null)
	{
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->set_url('guru');

		$area = array(
			"prov" => '35',
			"kabkot" => '72',
		);
		$this->dm->set_area($area);

		$data['jenkel'] = $this->dm->jenkel_get();
		$data['cabang'] = $this->dm->cabang_get();
		$data['ranting'] = $this->dm->ranting_get();
		$data['sabuk'] = $this->dm->sabuk_get();
		$data['jnssekolah'] = $this->dm->jnssekolah_get();
		$data['sabuk'] = $this->dm->sabuk_get();
		$data['sekolah'] = $this->dm->sekolah_get();
		$this->guru_id = $guru_id;

		$this->sys->render_metronic('show', $data);
	}
}

/* End of file Guru.php */
/* Location: ./application/modules/guru/controllers/Guru.php */
