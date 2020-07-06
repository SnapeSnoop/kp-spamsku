<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_tarif');
		$this->load->model('m_pelanggan');
	}

	function index(){
		$data = array(
			'tarif' => $this->m_tarif->get_tarif(),
			'pelanggan' => $this->m_pelanggan->get_pelanggan(),
		);
		$this->render_page('v_tarif',$data);
	}

	function get_data(){
		$id = $this->input->post('no_pelanggan');
		$data = $this->m_tarif->rekening_id($id);
		echo json_encode($data);
	}

	function get_prev_usage(){
		$pelanggan = $this->input->post('no_pelanggan');
		$dat = $this->m_tarif->get_previous_usage_by_month($pelanggan);
		echo json_encode($dat);
	}

	function action_tambah(){
		$tgl = date('Y-m-d');
		$awal = $this->input->post('mawal');
		$akhir = $this->input->post('makhir');
		$pakai = $akhir-$awal;
		$air = $this->input->post('biaya_air');
		$adm = $this->input->post('biaya_adm');
		$total = ($pakai * $air) + $adm;

		for($start =1; $start <= $pakai; $start++){
			$gol_satu = ($pakai <= 10 && $pakai < 50 ? $gol_satu = $pakai : $gol_satu = 10);
			$gol_dua = ($pakai <= 10 ? $gol_dua = 10 : ($pakai <= 50 ? $gol_dua = $pakai - 10 : ($pakai > 50 ? $gol_dua = 40 : ($gol_dua = $pakai - 10)))); 
			$gol_tiga = ($pakai > 50 ? $gol_tiga = $pakai - ($gol_satu + $gol_dua) : $gol_tiga = 0);
		}

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
			'status' => 'Belum bayar',
			'gol1' => $gol_satu,
			'gol2' => $gol_dua,
			'gol3' => $gol_tiga
		);

		$this->m_tarif->tambah($data);
		redirect('tarif');
	}
}

?>