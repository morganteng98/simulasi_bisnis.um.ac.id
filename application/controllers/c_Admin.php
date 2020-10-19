<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_Admin extends CI_Controller
{
		function __construct()
	{
		parent::__construct();		
		$this->load->model('m_admin');
	}

		function index()
	{
		$data['tbl_admin'] = $this->m_admin->tampil_adm()->result();
		//$data['tbl_admin'] = $this->m_user->tampil_adm()->result();
		$this->load->view('admin/v_admin',$data);
	}

	function add()
	{
		
		$this->load->view('./admin/pecah/i_head');
		$this->load->view('./admin/pecah/i_navbar');
		$this->load->view('./admin/pecah/i_sidebar');

		$this->load->view('admin/v_admintambah');
		
		$this->load->view('./admin/pecah/i_footer');
	}



}
