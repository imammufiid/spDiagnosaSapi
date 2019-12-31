<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{

	function save()
	{
		// $this->db->set($_POST);
		
		$kode = $this->input->post('kode_penyakit');
		if (!empty($kode)) {
			$nama = $this->input->post('nama_penyakit');
			$det = $this->input->post('det_penyakit');
			$srn = $this->input->post('srn_penyakit');
			$srn = $this->input->post('srn_penyakit');
			$gambar_old = $this->input->post('old_img');
			$status = $this->input->post('status');
			if ($_FILES['gambar']['error'] == 4) {
				$gambar = $gambar_old;
			} else {
				$gambar = $this->_uploudEditImage();
				$this->db->set('gambar', $gambar);
				unlink(FCPATH . 'assets/media/penyakit/' . $gambar_old);
			}
			$this->db->set('nama_penyakit', $nama);
			$this->db->set('det_penyakit', $det);
			$this->db->set('srn_penyakit', $srn);
			$this->db->set('status', $status);
			$this->db->where('kode_penyakit', $kode);
			$this->db->update('penyakit');
		} else {
			$data = [
				'kode_penyakit' => $this->input->post('kode_penyakit'),
				'nama_penyakit' => $this->input->post('nama_penyakit'),
				'det_penyakit' => $this->input->post('det_penyakit'),
				'srn_penyakit' => $this->input->post('srn_penyakit'),
				'gambar' => $this->_uploudImage(),
				'status' => $this->input->post('status'),
				'created_at' => $this->input->post('created_at'),
			];
			$this->db->insert('penyakit', $data);
		}

		return $this->db->affected_rows();
	}

	private function _uploudImage()
	{
		$upload_image = $_FILES["gambar"]['name'];
		// $old_image = $_POST['old_img']['name'];
		// var_dump($upload_image);

		if ($upload_image) {
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']      = '10240';
			$config['upload_path']   = './assets/media/penyakit/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				return $this->upload->data('file_name');
			} else {
				// $this->session->set_flashdata('file', 'Yang anda apload bukan gambar');
				// redirect('Admin/addProduk');
				echo "Yang anda apload bukan gambar";
				// echo $this->upload->display_errors();
			}
		} else {
			// $this->session->set_flashdata('file', 'Anda belum memasukkan gambar');
			// redirect('Admin/addProduk');
			echo "Anda belum memasukkan gambar";
		}
	}

	private function _uploudEditImage()
	{
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image) {
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']      = '10240';
			$config['upload_path']   = './assets/media/penyakit/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				return $this->upload->data('file_name');
			} else {
				// $this->session->set_flashdata('file', 'Yang anda apload bukan gambar');
				// redirect('Admin/editProduk/' . $id);
				echo "Yang anda apload bukan gambar";
				// echo $this->upload->display_errors();
			}
		} else {
			// $this->session->set_flashdata('file', 'Anda belum memasukkan gambar');
			// redirect('Admin/editProduk/' . $id);
			echo "Anda belum memasukkan gambar";
		}
	}
}

/* End of file M_guru.php */
/* Location: ./application/modules/guru/models/M_guru.php */
