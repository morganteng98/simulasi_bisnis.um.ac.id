<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_beranda');

		$this->load->view('admin/pecah/i_info');
		$this->load->view('admin/pecah/i_lainnya');
		$this->load->view('admin/pecah/i_footer');

	}

	
	
}
