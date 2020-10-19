<?php 

class M_user extends CI_Model{
	function tampil_usr(){
		return $this->db->get('tbl_user');
	}

	function input_data_usr($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function hapus_data_usr($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}