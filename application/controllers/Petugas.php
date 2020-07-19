<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_petugas','m_petugas');
	}

	function index(){
		$data = array(
			'petugas' => $this->m_petugas->get_petugas(),
		);
		$this->render_page('v_petugas',$data);
	}

	function action_tambah(){
		$data = array(
			'nama_petugas' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'nohp' => $this->input->post('nohp'),
			'email' => $this->input->post('email'),
			'root' => '2'
		);

		$this->m_petugas->tambah($data);
		redirect('petugas');
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
		);

		$where = array('idptgs' => $id);
		$this->m_petugas->edit($where,$data);
		redirect('petugas');
	}

	function action_hapus($id){
		$where=array('idptgs'=>$id);
        $this->m_petugas->hapus($where);
        //redirect
        redirect('petugas');
    }

	

}
?>