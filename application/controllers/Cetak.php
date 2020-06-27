<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_cetak');
	}

	function index()
	{
		$data = array(
			'cetak' => $this->m_cetak->get_cetak(),
		);
		$this->render_page('v_cetakpembayaran', $data);
	}

	function cetak($id){
		$where = $id;
		$data['cetak'] = $this->m_pembayaran->cetak($where);
		$this->render_page('v_print', $data);
	}

}
