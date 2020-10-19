<?php 

class M_sasaran extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_sasaran');
	}
}