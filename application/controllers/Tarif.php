<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_tarif');
	}

	function index(){
		$data = array(
			'tarif' => $this->m_tarif->get_tarif(),
		);
		$this->render_page('v_tarif',$data);
	}

	function get_data(){
		$id = $this->input->post('norekening');
		$data = $this->m_tarif->rekening_id($id);
		echo json_encode($data);
	}

	function action_tambah(){
		$tgl = date('Y-m-d');
		$awal = $this->input->post('mawal');
		$akhir = $this->input->post('makhir');
		$pakai = $akhir-$awal;
		$air = $this->input->post('biaya_air');
		$adm = $this->input->post('biaya_adm');
		$total = ($pakai * $air) + $adm;


		$data = array(
			'no_pelanggan' => $this->input->post('no_pelanggan'),
			'idgolongan' => $this->input->post('idgolongan'),
			'bulan_rekening' => $this->input->post('bulan'),
			'mawal' => $awal,
			'makhir' => $akhir,
			'pemakaian' => $pakai,
			'total_bayar' => $total,
			'input_oleh' => $this->session->userdata('ses_id'),
			'tanggal_data' => $tgl,
			'status' => 'Belum bayar'
		);

		$this->m_tarif->tambah($data);
		redirect('tarif');
	}
}

?>