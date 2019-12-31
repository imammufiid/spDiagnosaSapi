<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengetahuan extends CI_Model
{

	function datadiri_save()
	{
		$this->db->set($_POST);
		if (!empty(@$_POST['kode_pengetahuan'])) {
			$this->db->where('kode_pengetahuan', @$_POST['kode_pengetahuan']);
			$this->db->update('basis_pengetahuan');
		} else {
			$this->db->insert('basis_pengetahuan');
		}

		return $this->db->affected_rows();
	}

	private function _uploudImage()
	{
		$upload_image = $_FILES['gambar']['name'];
		// $old_image = $_POST['old_img']['name'];

		if ($upload_image) {
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']      = '10240';
			$config['upload_path']   = './assets/img/produk/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				return $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('file', 'Yang anda apload bukan gambar');
				redirect('Admin/addProduk');
				// echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('file', 'Anda belum memasukkan gambar');
			redirect('Admin/addProduk');
		}
	}

	private function _uploudEditImage()
   {
      $id = $_POST['id'];
      $upload_image = $_FILES['gambar']['name'];
      // $old_image = $_POST['old_img']['name'];

      if ($upload_image) {
         $config['allowed_types'] = 'jpg|jpeg|png';
         $config['max_size']      = '10240';
         $config['upload_path']   = './assets/img/produk/';

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
         } else {
            $this->session->set_flashdata('file', 'Yang anda apload bukan gambar');
            redirect('Admin/editProduk/' . $id);
            // echo $this->upload->display_errors();
         }
      } else {
         $this->session->set_flashdata('file', 'Anda belum memasukkan gambar');
         redirect('Admin/editProduk/' . $id);
      }
   }
}

/* End of file M_guru.php */
/* Location: ./application/modules/guru/models/M_guru.php */
