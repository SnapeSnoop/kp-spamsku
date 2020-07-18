<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_golongan','m_golongan');
	}

	function index(){
		$data = array(
			'golongan' => $this->m_golongan->get_golongan(),
		);
		$this->render_page('v_golongan',$data);
	}

	function action_tambah(){
		$data = array(
			'golongan' => $this->input->post('golongan'),
			'gol1' => $this->input->post('gol1'),
			'gol2' => $this->input->post('gol2'),
			'gol3' => $this->input->post('gol3'),
			'biaya_air' => $this->input->post('biaya_air'),
			'biaya_adm' => $this->input->post('biayaadm')
		);

		$this->m_golongan->tambah($data);
		redirect('golongan');
	}

	function action_edit(){
		$id = $this->input->post('idgolongan');
		$data = array(
			'golongan' => $this->input->post('golongan'),
			'gol1' => $this->input->post('gol1'),
			'gol2' => $this->input->post('gol2'),
			'gol3' => $this->input->post('gol3'),
			'biaya_air' => $this->input->post('biaya_air'),
			'biaya_adm' => $this->input->post('biayaadm')
		);
		$where = array('idgolongan' => $id);
		$this->m_golongan->edit($where,$data);
		redirect('golongan');

	}

	function action_hapus($id){
		$where = array('idgolongan' => $id);
		$this->m_golongan->hapus($where);
		redirect('golongan');
	}

}
