<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengaduan');
	}

	function index()
	{
		$data = array(
			'pengaduan' => $this->m_pengaduan->get_pengaduan(),
		);
		$this->render_page('v_pengaduan', $data);
	}

	function action_tambah()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => $this->input->post('tanggal'),
			'keluhan' => $this->input->post('keluhan'),
			'status' => $this->input->post('status'),
			'root' => '3'
		);

		require APPPATH . 'views/vendor/autoload.php';
		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			'd675950e5a7c2de95557',
			'52870c8229ddc5979c97',
			'1036649',
			$options
		);

		$nf['message'] = 'hello world';
		$pusher->trigger('my-channel', 'my-event', $nf);

		$this->m_pengaduan->tambah($data);
		redirect('pengaduan');

			
	}

	function list_notifikasi(){
		
	}

	function action_edit()
	{
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'tanggal' => $this->input->post('tanggal'),
			'keluhan' => $this->input->post('keluhan'),
			'status' => $this->input->post('status')
		);

		$where = array('id' => $id);
		$this->m_pengaduan->edit($data, $where);
		redirect('pengaduan');
	}

	function action_hapus($id)
	{
		$where = array('id' => $id);
		$this->m_pengaduan->hapus($where);
		//redirect
		redirect('pengaduan');
	}
}
