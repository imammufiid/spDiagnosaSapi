<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_diagnosa extends CI_Model
{
  var $table = 'gejala'; //nama tabel dari database
	var $column_order = ['kode_gejala', 'nama_gejala']; //field yang ada di table user
	var $column_search = ['kode_gejala', 'nama_gejala']; //field yang diizin untuk pencarian 
	var $order = array('kode_gejala' => 'asc'); // default order

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
  
  private function _get_datatables_query()
	{
		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item) // looping awal
		{
			if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
			{

				if ($i === 0) // looping awal
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
    }
    
    if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
  }
  
  public function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}

/* End of file M_guru.php */
/* Location: ./application/modules/guru/models/M_guru.php */
