<?php
	class m_analysis extends CI_Model
	{
			function tampil_produk()
			{
				$query = $this->db->get('tbl_produk')->result();
				return $query;
			}
			function input_data_produk($data,$table)
			{
				$this->db->insert($table,$data);
			}

			function edit_data_produk($where,$table){		
				return $this->db->get_where($table,$where);
			}
			function update_data_produk($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}

			function hapus_data_produk($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}

// ----------------------------------- Sasaran --------------------------------------	
			function tampil_sasaran()
			{
				$query = $this->db->get('tbl_sasaran')->result();
				return $query;
			}

			function input_data_sasaran($data,$table)
			{
				$this->db->insert($table,$data);
			}

			function edit_data_sasaran($where,$table){		
				return $this->db->get_where($table,$where);
			}
			function update_data_sasaran($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}

			function hapus_data_sasaran($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}
			
// ----------------------------------- Sasaran --------------------------------------	
// ----------------------------------- Media Promosi --------------------------------------	
			function tampil_media_promosi()
			{
				$query = $this->db->get('tbl_media_promosi')->result();
				return $query;
			}
			function input_data_mp($data,$table)
			{
				$this->db->insert($table,$data);
			}

			function edit_data_mp($where,$table){		
				return $this->db->get_where($table,$where);
			}
			function update_data_mp($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}

			function hapus_data_mp($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}
// ----------------------------------- Media Promosi --------------------------------------	

		}
?>