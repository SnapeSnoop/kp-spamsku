<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_cetak');
	}

	function index(){
		$data = array(
			'cetak' => $this->m_cetak->get_cetak(),
		);
		$this->render_page('v_cetakpembayaran',$data);
	}

}

?>