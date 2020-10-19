<?php 

class M_product extends CI_Model{

//sumber bahan
	function tampil_sumber(){
	return $this->db->get('tbl_sumber_bahan');
	}

	function input_data_sumber($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function edit_data_sumber($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_sumber($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_sumber($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

//jenis bahan

	function tampil_jb(){
	return $this->db->get('tbl_jenis_bahan');
	}

	function input_data_jb($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function edit_data_jb($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_jb($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_jb($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

//macam bahan
	function tampil_mb(){
	return $this->db->get('tbl_macam_bahan');
	}

	function input_data_mb($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function edit_data_mb($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_mb($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_mb($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}