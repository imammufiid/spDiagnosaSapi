<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->sys->check_is_login();
		$this->load->model('m_system', 'm');
		$this->load->library('datatables', null, 'dt');
	}

	// ------------ Utils users page ----------------

	public function users() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('users/index');
	}

	public function users_add() {
		$data['_page_title'] = "Tambah Pengguna";
		$data['_sys_group'] = $this->m->group_get();
		$this->sys->render_metronic('users/add', $data);
	}

	public function users_edit() {
		$user_id = $_GET['id'];
		$data['_page_title'] = "Edit Pengguna";
		$data['_sys_group'] = $this->m->group_get();
		$data['users'] = $this->m->user_get($user_id);
		$this->sys->render_metronic('users/edit', $data);
	}

	public function users_fetch() {
		echo $this->dt->generate_json('_v_sys_user');
	}

	public function users_save() {
		$user_check = $this->m->user_check($_POST);
		if ($user_check['status']) {
			$this->m->user_save($_POST);
		}
		print_r(json_encode($user_check));
	}

	public function users_fetch_dt() {
		$this->dt->select('*');
		$this->dt->from('_v_sys_user');
		echo $this->dt->generate();
	}

	public function users_delete() {
		$user_id = $_POST['user_id'];
		$response = $this->m->user_delete($user_id);
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil dihapus!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal dihapus!')));
		}
	}

	public function users_modal($html) {
		$this->sys->render_metronic_modal('users/'.$html);
	}

	// ------------ Utils groups page ----------------

	public function groups() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('groups/index');
	}

	public function groups_modal($html) {
		$this->sys->render_metronic_modal('groups/'.$html);
	}

	public function groups_fetch() {
		echo $this->dt->generate_json('_sys_group');
	}

	public function groups_add() {
		$data['navbars'] = $this->m->navbar_get();
		$data['sidebars'] = $this->m->sidebar_get();
		$data['_page_title'] = "Tambah Grup";
		$this->sys->render_metronic('groups/add', $data);
	}

	public function groups_edit() {
		$group_id = $_GET['id'];
		$data['navbars'] = $this->m->navbar_get();
		$data['sidebars'] = $this->m->sidebar_get();
		$data['groups'] = $this->m->group_get($group_id);
		$this->sys->render_metronic('groups/edit', $data);
	}

	public function groups_save() {
		$group_id = $this->m->group_save();
		$response = $this->m->group_set_acces($group_id);
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'semua tersimpan!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal menyimpan!')));
		}
	}

	public function groups_delete() {
		$group_id = $_POST['group_id'];
		$response = $this->m->group_delete($group_id);
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil dihapus!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal dihapus!')));
		}
	}

	// ------------ Utils sidebars page ----------------

	public function sidebars() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('sidebars/index');
	}

	public function sidebars_modal($html) {
		$data['sidebars'] = $this->m->sidebar_get();
		$this->sys->render_metronic_modal('sidebars/'.$html, $data);
	}

	public function sidebars_fetch() {
		echo $this->dt->generate_json('_v_sys_sidebar');
	}

	public function sidebars_save() {
		$sidebars_save = $this->m->sidebar_save();
		print_r(json_encode($sidebars_save));
	}

	public function sidebars_delete() {
		$sidebar_id = $_POST['sidebar_id'];
		$response = $this->m->sidebar_delete($sidebar_id);
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil dihapus!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal dihapus!')));
		}
	}

	// ------------ Utils navbars page ----------------

public function navbars() {
		$this->sys->add_javascript_top_custom('assets/plugins/datatables/datatables.min.js');
		$this->sys->add_css_custom('assets/plugins/datatables/datatables.min.css');
		$this->sys->render_metronic('navbars/index');
	}

	public function navbars_modal($html) {
		$data['navbars'] = $this->m->navbar_get();
		$this->sys->render_metronic_modal('navbars/'.$html, $data);
	}

	public function navbars_fetch() {
		echo $this->dt->generate_json('_v_sys_navbar');
	}

	public function navbars_save() {
		$navbars_save = $this->m->navbar_save();
		print_r(json_encode($navbars_save));
	}

	public function navbars_delete() {
		$navbar_id = $_POST['navbar_id'];
		$response = $this->m->navbar_delete($navbar_id);
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'berhasil dihapus!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal dihapus!')));
		}
	}

	// ------------ Utils settings page ----------------

	public function settings() {
		$data['settings'] = $this->m->setting_get();
		$this->sys->render_metronic('settings/index', $data);
	}

	public function settings_save() {
		$response = $this->m->setting_save();
		if ($response) {
			print_r(json_encode(array('status' => true, 'msg' => 'semua tersimpan!')));
		} else {
			print_r(json_encode(array('status' => false, 'msg' => 'gagal menyimpan!')));
		}
	}

	// ------------ Utils Search ----------------

	function quick_search() {
		$data['menus'] = $this->db->like('label', $_GET['query'])->get('_v_search_menu')->result();
		$this->load->view('quicksearch/search', $data, FALSE);
	}

}

/* End of file System.php */
/* Location: ./application/controllers/System.php */