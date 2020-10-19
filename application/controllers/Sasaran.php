<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sasaran extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_sasaran');
	}

	function index(){
		$data['tbl_sasaran'] = $this->m_sasaran->tampil_data()->result();
		$this->load->view('admin/v_sasaran2',$data);
	}

}