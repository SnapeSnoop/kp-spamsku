<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
	}

	function index(){
		$data = array(
			'pelanggan' => $this->m_pelanggan->get_pelanggan(),
		);
		$this->render_page('v_pelanggan',$data);
	}

	function action_tambah(){
		$data = array(
			'no_pelanggan' => $this->input->post('no_pelanggan'),
			'idgolongan' => $this->input->post('idgolongan'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
		);

		$this->m_pelanggan->tambah($data);
		redirect('pelanggan');
	}

	function action_edit(){
		$id = $this->input->post('no_pelanggan');
		$data = array(
			'no_pelanggan' => $id,
			'idgolongan' => $this->input->post('idgolongan'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
		);

		$where = array('no_pelanggan'=> $id);
		$this->m_pelanggan->edit($data,$where);
		redirect('pelanggan');
	}

	function action_hapus($id){
		$where=array('no_pelanggan'=>$id);
        $this->m_pelanggan->hapus($where);
        //redirect
        redirect('pelanggan');
    }

}

?>