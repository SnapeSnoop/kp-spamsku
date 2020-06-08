<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_kasir');
	}

	function index(){
		$data = array(
			'kasir' => $this->m_kasir->get_kasir(),
		);
		$this->render_page('v_kasir',$data);
	}

	function action_tambah(){
		$data = array(
			'idptgs' => $this->input->post('idptgs'),
			'nama_petugas' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'nohp' => $this->input->post('nohp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'root' => '2'
		);

		$this->m_kasir->tambah($data);
		redirect('kasir');
	}

	function action_edit(){
		$id = $this->input->post('idptgs');
		$data = array(
			'idptgs' => $id,
			'nama_petugas' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'nohp' => $this->input->post('nohp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$where = array('idptgs' => $id);
		$this->m_kasir->edit($where,$data);
		redirect('kasir');
	}

	function action_hapus($id){
		$where=array('idptgs'=>$id);
        $this->m_kasir->hapus($where);
        //redirect
        redirect('kasir');
    }

	

}
?>