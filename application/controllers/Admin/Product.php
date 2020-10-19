<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_product');
		$this->load->helper('url');
	}

	function index()
	{
		

		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_produk');

		$this->load->view('admin/pecah/i_footer');
	}


/* ------------------------ sumber bahan ------------------------*/
	/*function category()
	{
		$data['tbl_sumber_bahan'] = $this->m_product->tampil_sumber()->result();
		$data['tbl_jenis_bahan'] = $this->m_product->tampil_jb()->result();
		$data['tbl_macam_bahan'] = $this->m_product->tampil_mb()->result();

		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_kategoriproduk',$data);

		$this->load->view('admin/pecah/i_footer');
	}*/
	function category_sb()
	{
		$data['tbl_sumber_bahan'] = $this->m_product->tampil_sumber()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');
		$this->load->view('admin/v_kategorisumber',$data);
		$this->load->view('admin/pecah/i_footer');
	}

	function category_sb_add()
	 	{
			// Menambah Promosi 	
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_kategorisumber_tambah"); // tampilan yg di ubah
			$this->load->view('admin/pecah/i_footer');
	 	}

	function category_sb_addaction()
		 {	
			$nama_sumber = $this->input->post('nama_sumber');
			$data = array
			(				
				'nama_sumber' => $nama_sumber
			);	
			$this->m_product->input_data_sumber($data,'tbl_sumber_bahan');
			redirect('Admin/Product/category_sb');
		}



/* ------------------------ sumber bahan ------------------------*/
	function category_jb()
	{
		$data['tbl_jenis_bahan'] = $this->m_product->tampil_jb()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');
		$this->load->view('admin/v_kategorijenis',$data);
		$this->load->view('admin/pecah/i_footer');
	}

	function category_jb_add()
	 	{
			// Menambah Promosi 	
		 	$this->load->view('admin/pecah/i_head');
			$this->load->view('admin/pecah/i_navbar');
			$this->load->view('admin/pecah/i_sidebar');
		 	$this->load->view("admin/v_kategorijenis_tambah"); // tampilan yg di ubah
			$this->load->view('admin/pecah/i_footer');
	 	}


	function category_jb_addaction()
		 {	
			$nama_jb = $this->input->post('nama_jb');
			$data = array
			(				
				'nama_jb' => $nama_jb
			);	
			$this->m_product->input_data_jb($data,'tbl_jenis_bahan');
			redirect('Admin/Product/category_jb');
		}


	function category_mb()
	{
		$data['tbl_macam_bahan'] = $this->m_product->tampil_mb()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');
		$this->load->view('admin/v_kategorimacam',$data);
		$this->load->view('admin/pecah/i_footer');
	}

	function category_mb_add()
 	{
		// Menambah Promosi 	
	 	$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');
	 	$this->load->view("admin/v_kategorimacam_tambah"); // tampilan yg di ubah
		$this->load->view('admin/pecah/i_footer');
 	}

	function category_mb_addaction()
		 {	
			$nama_mb = $this->input->post('nama_mb');
			$data = array
			(				
				'nama_mb' => $nama_mb
			);	
			$this->m_product->input_data_sumber($data,'tbl_macam_bahan');
			redirect('Admin/Product/category_mb');
		}

	


}
