<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Sys
{

	private $_ci;
	private $_javascript_bottom_custom = array();
	private $_javascript_top_custom = array();
	private $_css_custom = array();
	private $_url;
	  
	function __construct(){
	  $this->_ci = &get_instance();
	}

	function render_metronic($html, $data = array()) {
		$router['_settings']			= $this->_ci->db->get('_sys_setting')->row();
		$router['_page_title']			= @$data['_page_title'];
		$router['_render_page_title']	= ($router['_page_title']) ? $router['_page_title'] : $this->render_metronic_page_title();
		$sys = $router;
		$sys['_css'] 				= $this->_ci->load->view('_templates/css', NULL, TRUE);
		$data['_render_menu_label']	= $this->render_metronic_page_label();
		$sys['_css_custom'] 		= $this->render_custom_css();
		$sys['_javascript_top'] 	= $this->_ci->load->view('_templates/javascript_top', NULL, TRUE);
		$sys['_javascript_top_custom']	= $this->render_javascript_top_custom();
		$sys['_navbar_left'] 			= $this->_ci->load->view('_templates/navbar_left', $router, TRUE);
		$sys['_navbar_right'] 			= $this->_ci->load->view('_templates/navbar_right', $router, TRUE);
		$sys['_sidebar'] 			= $this->_ci->load->view('_templates/sidebar', $router, TRUE);
		$sys['_footer'] 			= $this->_ci->load->view('_templates/footer', $router, TRUE);
		$sys['_javascript_bottom']	= $this->_ci->load->view('_templates/javascript_bottom', NULL, TRUE);
		$sys['_javascript_bottom_custom']	= $this->render_javascript_bottom_custom();
		$sys['_content']			= $this->_ci->load->view($html, $data, TRUE);
		$this->_ci->load->view('_templates/layout', $sys, FALSE);
	}

	function render_metronic_modal($html, $data = array()) {
		echo $this->render_custom_css();
		echo $this->render_javascript_top_custom();
		$this->_ci->load->view(''.$html, $data, FALSE);
		echo $this->render_javascript_bottom_custom();
	}

	function set_url($url=null) {
		$this->_url = $url;
		return $this;
	}

	function render_metronic_page_label() {
		$db = $this->_ci->db->where('href', uri_string())->get('_v_sys_page_access');
		if ($db->num_rows() > 0) {
			$data = $db->row();
			$render = '<i class="'.$data->icon.'"></i>';
			$render .= '<span class="ml-2">'.$data->label.'</span>';
			return $render;
		}
	}

	function render_metronic_page_title() {
		$db = $this->_ci->db->where('href', uri_string())->get('_v_sys_page_access');
		if ($db->num_rows() > 0) {
			return $db->row('label');
		} else {
			return '';
		}
	}

	function add_javascript_top_custom($javascript) {
		array_push($this->_javascript_top_custom, $javascript);
	}

	function render_javascript_top_custom() {
		$javascript = '';
		foreach ($this->_javascript_top_custom as $val) {
			$javascript .= PHP_EOL.'<script type="text/javascript" src="'.base_url($val).'"></script>';
		}
		$javascript .= PHP_EOL;
		return $javascript;
	}

	function add_javascript_bottom_custom($javascript) {
		array_push($this->_javascript_bottom_custom, $javascript);
	}

	function render_javascript_bottom_custom() {
		$javascript = '';
		foreach ($this->_javascript_bottom_custom as $val) {
			$javascript .= PHP_EOL.'<script type="text/javascript" src="'.base_url($val).'"></script>';
		}
		$javascript .= PHP_EOL;
		return $javascript;
	}

	function add_css_custom($css) {
		array_push($this->_css_custom, $css);
	}

	function render_custom_css() {
		$css = '';
		foreach ($this->_css_custom as $val) {
			$css .= PHP_EOL.'<link rel="stylesheet" type="text/css" href="'.base_url($val).'">';
		}
		$css .= PHP_EOL;
		return $css;
	}

	function get_access_page($row) {
		$group_id = get_instance()->session->userdata('group_id');
		$get_access = get_instance()->db->where('href', $this->current_url())->where('group_id', $group_id)->get('_v_sys_page_access')->row($row);
		return $get_access;
	}

	function anchor_dt_add($url, $label) {
		$dt_btn = '';

		if ($this->get_access_page('create')) {
			$dt_btn = '<a href="'.base_url($url).'" class="btn btn-primary btn-bold btn-sm">
				<i class="fa fa-plus"></i> '.$label.'
			</a>';
		}
		
		return $dt_btn;
	}

	function anchor_dt_edit() {
		$dt_btn = '';
		if ($this->get_access_page('update')) {
			$dt_btn = '<a class="btn btn-sm btn-clean btn-icon btn-icon-lg dt-edit"><i class="flaticon2-sheet"></i></a>';
		}
		return $dt_btn;
	}

	function btn_dt_add($js_function, $label) {
		$dt_btn = '';
		if ($this->get_access_page('create')) {
			$dt_btn = '<button onclick="'.$js_function.'" class="btn btn-brand btn-primary btn-elevate btn-icon-sm">
					<i class="fa fa-plus"></i> '.$label.'
				</button>';
		}
		return $dt_btn;
	}

	function btn_dt_edit() {
		$dt_btn = '';
		if ($this->get_access_page('update')) {
			$dt_btn = '<button class="btn btn-sm btn-clean btn-icon btn-icon-lg dt-edit"><i class="flaticon2-sheet"></i></button>';
		}
		return $dt_btn;
	}

	function btn_dt_delete() {
		$dt_btn = '';
		if ($this->get_access_page('delete')) {
			$dt_btn = '<button class="btn btn-sm btn-clean btn-icon btn-icon-lg dt-delete"><i class="flaticon-delete"></i></button>';
		}
		return $dt_btn;
	}

	function check_is_login() {
		$is_logged_in = $this->_ci->session->userdata('is_logged_in');
		if (!$is_logged_in) {
			redirect('auth/login','refresh');
		}
	}

	function current_url() {
		$url = (empty($this->_url)) ? uri_string() : $this->_url;
		$url = str_replace('_add', '', $url);
		$url = str_replace('_edit', '', $url);
		$url = str_replace('_fetch', '', $url);
		$url = str_replace('_save', '', $url);
		$url = str_replace('_delete', '', $url);
		return $url;
	}

	function is_readable_page() {
		$exclude = array('modal', 'search');
		$read = $this->get_access_page('read');
		if ($this->strpos_arr($this->current_url(), $exclude)) {
			$read = true;
		}
		if (!$read) {
			redirect('errors','refresh');
		}
	}

	function strpos_arr($haystack, $needle) {
	    if(!is_array($needle)) $needle = array($needle);
	    foreach($needle as $what) {
	        if(($pos = strpos($haystack, $what))!==false) return $pos;
	    }
	    return false;
	}
}