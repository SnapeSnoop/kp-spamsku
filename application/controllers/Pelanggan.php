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
			'no_rekening' => $this->input->post('no_rekening'),
			'nama_lengkap' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'pekerjaan' => $this->input->post('pekerjaan'),
		);

		$this->m_pelanggan->tambah($data);
		redirect('pelanggan');
	}

	function action_edit(){
		$id = $this->input->post('no_pelanggan');
		$data = array(
			'no_pelanggan' => $id,
			'no_rekening' => $this->input->post('no_rekening'),
			'nama_lengkap' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'pekerjaan' => $this->input->post('pekerjaan'),
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

    function cetak (){
    	$data = array(
    		'pelanggan' => $this->m_pelanggan->get_pelanggan(),
    	);

    	$this->load->view('v_cetakpelanggan',$data);
    }

}

?>