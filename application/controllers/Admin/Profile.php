<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
		function __construct()
	{
		parent::__construct();		
		$this->load->model('m_admin');
	}

		function index()
	{
		$data['tbl_admin'] = $this->m_admin->tampil_admin()->result();
		//$data['tbl_admin'] = $this->m_user->tampil_adm()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_profiladmin',$data);
		
		$this->load->view('admin/pecah/i_footer');
	}

	function edit()
	{
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_ubahadmin');
		
		$this->load->view('admin/pecah/i_footer');
	}

	/*function add()
	 	{
	 		$this->load->view("admin/v_tambahuser");
	 	}
*/

}
