<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_user','m_user');
	}

	function index(){
		$data = array(
			'user' => $this->m_user->get_user(),
		);
		$this->render_page('v_user',$data);
	}

	function action_tambah(){
		$data = array(
            'nama' => $this->input->post('nama'),
            'notlp'=> $this->input->post('notlp'),
            'email'=> $this->input->post('email'),
            'password' => md5($this->input->post('password')),
			'root' => $this->input->post('root')
		);

		$this->m_user->tambah($data);
		redirect('user');
	}

	function action_edit(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
            'notlp'=> $this->input->post('notlp'),
            'email'=> $this->input->post('email')
		);

		$where = array('id'=> $id);
		$this->m_user->edit($data,$where);
		redirect('user');
	}

	function action_hapus($id){
		$where=array('id'=>$id);
        $this->m_user->hapus($where);
        redirect('user');
    }

}
