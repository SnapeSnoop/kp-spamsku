<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller {

	function index(){

		$this->load->model('m_pelanggan');
		$this->load->model('m_tarif');
		$this->load->model('m_pembayaran');
		$this->load->model('m_pengaduan');

		$data['total_pelanggan'] = $this->m_pelanggan->count_customer();
		$data['total_tarif'] = $this->m_tarif->count_tarif();
		$data['total_pembayaran'] = $this->m_pembayaran->count_pembayaran();
		$data['total_pengaduan'] = $this->m_pengaduan->count_pengaduan();

		$this->render_page('home', $data);
	}
}

?>