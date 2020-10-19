<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
		function __construct()
	{
		parent::__construct();		
		$this->load->model('m_user');
	}

	function index()
	{
		$data['tbl_user'] = $this->m_user->tampil_usr()->result();
		//$data['tbl_admin'] = $this->m_user->tampil_adm()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_pengguna',$data);
		
		$this->load->view('admin/pecah/i_footer');
	}


	function add()
	{
		$data['tbl_user'] = $this->m_user->tampil_usr()->result();
		//$data['tbl_admin'] = $this->m_user->tampil_adm()->result();
		$this->load->view('admin/pecah/i_head');
		$this->load->view('admin/pecah/i_navbar');
		$this->load->view('admin/pecah/i_sidebar');

		$this->load->view('admin/v_tambahpengguna'/*,$data*/);
		
		$this->load->view('admin/pecah/i_footer');
	}

	function addaction()
		 {	
			$username_user  = $this->input->post('username_user');
			$email  = $this->input->post('email');
			$password  = $this->input->post('password');
			$pendidikan  = $this->input->post('pendidikan');
			$telepon  = $this->input->post('telepon');
			$nama_usaha  = $this->input->post('nama_usaha');
			$lokasi_usaha  = $this->input->post('lokasi_usaha');
			$data = array
			(				
				'username_user' => $username_user,
				'email' => $email,
				'password' => $password,
				'pendidikan' => $pendidikan,
				'telepon' => $telepon,
				'nama_usaha' => $nama_usaha,
				'lokasi_usaha' => $username_user
			);	
			$this->m_user->input_data_usr($data,'tbl_user');
			redirect('Admin/user');
		}





}
