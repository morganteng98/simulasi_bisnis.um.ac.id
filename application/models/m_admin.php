<?php 

class M_admin extends CI_Model{
	
	function tampil_admin()
	{
		return $this->db->get('tbl_admin');
	}
	
}