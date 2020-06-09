<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_konfirmasi');
	}

	function index(){
		$data = array(
			'konfirmasi' => $this->m_konfirmasi->get_konfirmasi(),
		);
		$this->render_page('v_konfirmasiPembayaran',$data);
	}

}

?>