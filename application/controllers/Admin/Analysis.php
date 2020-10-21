 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analysis extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_analysis');
		$this->load->helper('url');
	}

// ---------------------------------------------- 			    ---------------------------------------------- Tampil
// ---------------------------------------------- Media Promosi ---------------------------------------------- Tambah
// ---------------------------------------------- 			    ---------------------------------------------- Ubah, Hapus










	function All()
	 	{
		 	$data['tbl_produk']=$this->m_analysis->tampil_produk();
	 		$data['tbl_sasaran']=$this->m_analysis->tampil_sasaran();
	 		$data['tbl_media_promosi']=$this->m_analysis->tampil_media_promosi();

		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');

		 	$this->load->view("admin/v_analisis_semua",$data);

	
			$this->load->view('admin/pecah/i_footer');
	 	}

// ---------------------------------------------- Fungsi fungsi Media Promosi ----------------------------------------------

	 	function Product()
	 	{
			$data['tbl_produk']=$this->m_analysis->tampil_produk(); 		
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_produk",$data);	
			$this->load->view('admin/pecah/i_footer');
	 	}

	 	function AddProduct()
	 	{
			// Menambah produk	 	
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_produk_tambah"); // tampilan yg di ubah
			$this->load->view('admin/pecah/i_footer');
	 	}

		function AddProductAction()
		 {	
			//Aksi untuk menambah promosi	 	
			$nama_produk = $this->input->post('nama_produk'); // Karena utk tambah data disini AI (auto increment) jadi tidak perlu + $id_produk
			$str_produk = $this->input->post('str_produk');
			$wks_produk = $this->input->post('wks_produk');
			$oprt_produk = $this->input->post('oprt_produk');
			$thrt_produk = $this->input->post('thrt_produk');
			$data = array
			(				
				'nama_produk' => $nama_produk,
				'str_produk' => $str_produk,
				'wks_produk' => $wks_produk,
				'oprt_produk' => $oprt_produk,
				'thrt_produk' => $thrt_produk
			);	
			$this->m_analysis->input_data_produk($data,'tbl_produk');
			redirect('Admin/Analysis/Product');
		}


	 	function EditProduct($id_produk){
	 		$where = array('id_produk' => $id_produk);
			$data['tbl_produk'] = $this->m_analysis->edit_data_produk($where,'tbl_produk')->result();
			$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_produk_edit",$data);
			$this->load->view('admin/pecah/i_footer');
	 	}

			function EditProductAction(){
			$id_produk = $this->input->post('id_produk');
			$nama_produk = $this->input->post('nama_produk');		 
			$str_produk = $this->input->post('str_produk');		 
			$wks_produk = $this->input->post('wks_produk');		 
			$oprt_produk = $this->input->post('oprt_produk');		 
			$thrt_produk = $this->input->post('thrt_produk');		 
			$data = array(
				'nama_produk' => $nama_produk,
				'str_produk' => $str_produk,
				'wks_produk' => $wks_produk,
				'oprt_produk' => $oprt_produk,
				'thrt_produk' => $thrt_produk
				
			);
		 
			$where = array(
				'id_produk' => $id_produk
			);
		 
			$this->m_analysis->update_data_produk($where,$data,'tbl_produk');
			redirect('Admin/Analysis/Product');
		}


		//fungsi hapus 
			function delete_product($id_produk){
	 		$where = array('id_produk' => $id_produk);
			$this->m_analysis->hapus_data_mp($where,'tbl_produk');
			redirect('Admin/Analysis/Product');
	 	}


// ---------------------------------------------- 			    ----------------------------------------------
// ---------------------------------------------- Media Promosi ----------------------------------------------
// ---------------------------------------------- 			    ----------------------------------------------
	 	function Promotion()
	 	{
	 		$data['tbl_media_promosi']=$this->m_analysis->tampil_media_promosi();
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_mediapromosi",$data);
	 	}
	 	function AddPromotion()
	 	{
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_mediapromosi_tambah");
			$this->load->view('admin/pecah/i_footer');	
	 	}
	 	function AddPromotionAction()
		{	
			$nama_mp = $this->input->post('nama_mp');
			$str_mp = $this->input->post('str_mp');
			$wks_mp = $this->input->post('wks_mp');
			$oprt_mp = $this->input->post('oprt_mp');
			$thrt_mp = $this->input->post('thrt_mp');
			$data = array
			(				
				'nama_mp' => $nama_mp,
				'str_mp' => $str_mp,
				'wks_mp' => $wks_mp,
				'oprt_mp' => $oprt_mp,
				'thrt_mp' => $thrt_mp
			);	
			$this->m_analysis->input_data_mp($data,'tbl_media_promosi');
			redirect('Admin/Analysis/Promotion');
		}
		function EditPromotion($id_mp)
	 	{
	 	
	 		$where = array('id_mp' => $id_mp);
			$data['tbl_media_promosi'] = $this->m_analysis->edit_data_mp($where,'tbl_media_promosi')->result();
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_mediapromosi_edit",$data);
			$this->load->view('admin/pecah/i_footer');
	 	}
		function EditPromotionAction()
		{
			$id_mp = $this->input->post('id_mp');
			$nama_mp = $this->input->post('nama_mp');
			$str_mp = $this->input->post('str_mp');
			$wks_mp = $this->input->post('wks_mp');
			$oprt_mp = $this->input->post('oprt_mp');
			$thrt_mp = $this->input->post('thrt_mp');
			
			$data = array
			(
				'nama_mp' => $nama_mp,
				'str_mp' => $str_mp,
				'wks_mp' => $wks_mp,
				'oprt_mp' => $oprt_mp,
				'thrt_mp' => $thrt_mp
			);
		 
			$where = array(
				'id_mp' => $id_mp
			);
		 
			$this->m_analysis->update_data_mp($where,$data,'tbl_media_promosi');
			redirect('Admin/Analysis/Promotion');
			}

		function DeleteMP($id_mp)
		{
	 		$where = array('id_mp' => $id_mp);
			$this->m_analysis->hapus_data_mp($where,'tbl_media_promosi');
			redirect('Admin/Analysis/Promotion');
	 	}
// ---------------------------------------------- 			    ----------------------------------------------
// ---------------------------------------------- Media Promosi ----------------------------------------------
// ---------------------------------------------- 			    ----------------------------------------------
	 		


	 	function Target()
	 	{
	 		$data['tbl_sasaran']=$this->m_analysis->tampil_sasaran();


		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');

		 	$this->load->view("admin/v_analisis_sasaran",$data);

	
			$this->load->view('admin/pecah/i_footer');
	 	}
	 	function AddTarget()
	 	{
			// Menambah Promosi	 	
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_sasaran_tambah"); // tampilan yg di ubah
			$this->load->view('admin/pecah/i_footer');
	 	}

	 	function AddTargetAction()
		 {	
			//Aksi untuk menambah promosi	 	
			$nama_ssrn = $this->input->post('nama_ssrn'); // Karena utk tambah data disini AI (auto increment) jadi tidak perlu + $id_ssrn
			$str_ssrn = $this->input->post('str_ssrn');
			$wks_ssrn = $this->input->post('wks_ssrn');
			$oprt_ssrn = $this->input->post('oprt_ssrn');
			$thrt_ssrn = $this->input->post('thrt_ssrn');
			$data = array
			(				
				'nama_ssrn' => $nama_ssrn,
				'str_ssrn' => $str_ssrn,
				'wks_ssrn' => $wks_ssrn,
				'oprt_ssrn' => $oprt_ssrn,
				'thrt_ssrn' => $thrt_ssrn
			);	
			$this->m_analysis->input_data_sasaran($data,'tbl_sasaran');
			redirect('Admin/Analysis/Target');
		}

	 	//fungsi hapus 
			function delete_target($id_ssrn){
	 		$where = array('id_ssrn' => $id_ssrn);
			$this->m_analysis->hapus_data_sasaran($where,'tbl_sasaran');
			redirect('Admin/Analysis/Target');
	 	}



	 	function EditTarget($id_ssrn){
	 		$where = array('id_ssrn' => $id_ssrn);
			$data['tbl_sasaran'] = $this->m_analysis->edit_data_sasaran($where,'tbl_sasaran')->result();
			$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_analisis_sasaran_edit",$data); // Akan diarahkan ke form edit
			$this->load->view('admin/pecah/i_footer');
	 	} 

			function EditTargetAction(){
			$id_ssrn = $this->input->post('id_ssrn');
			$nama_ssrn = $this->input->post('nama_ssrn');
			$str_ssrn = $this->input->post('str_ssrn');
			$wks_ssrn = $this->input->post('wks_ssrn');
			$oprt_ssrn = $this->input->post('oprt_ssrn');
			$thrt_ssrn = $this->input->post('thrt_ssrn');
			
		 
			$data = array(
				'nama_ssrn' => $nama_ssrn,
				'str_ssrn' => $str_ssrn,
				'wks_ssrn' => $wks_ssrn,
				'oprt_ssrn' => $oprt_ssrn,
				'wks_ssrn' => $wks_ssrn,
				'thrt_ssrn' => $thrt_ssrn
				
			);
		 
			$where = array(
				'id_ssrn' => $id_ssrn
			);
		 
			$this->m_analysis->update_data_sasaran($where,$data,'tbl_sasaran');
			redirect('Admin/Analysis/Target');
		}



}

