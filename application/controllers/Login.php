<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('login');
	}

	function action_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek_admin = $this->m_login->login_admin($username,$password);
		
		if($cek_admin->num_rows() > 0){
			$data=$cek_admin->row_array();
			$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('ses_id',$data['idadmin']);
				$this->session->set_userdata('ses_nama',$data['nama_lengkap']);
				redirect(base_url('utama'));
			}
				else{
					echo $this->session->set_flashdata('msg','Username dan Password Salah');
					redirect(base_url('login'));
				}
	}

	function logout(){
	    $this->session->sess_destroy();
	    redirect('login');
  }
}
