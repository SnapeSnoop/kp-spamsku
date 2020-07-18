<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_konfirmasi','m_konfirmasi');
		$this->load->model('Model_pelanggan','m_pelanggan');
		$this->load->model('Model_pembayaran','m_pembayaran');

	}

	function index()
	{
		$data = array(
			'konfirmasi' => $this->m_konfirmasi->get_konfirmasi(),
			'pelanggan' => $this->m_pelanggan->get_pelanggan(),
		);
		$this->render_page('v_konfirmasi', $data);
	}

	function action_tambah()
	{

		$config['upload_path']          = './upload/bukti/';
		$config['allowed_types']        = 'jpeg|jpg|png|pdf';
		$config['max_size']             = 1000000000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bukti_tf')) {
			echo '<script type="text/javascript">alert("Gambar Kosong atau Ukuran Gambar Terlalu Besar")</script>';
			redirect('konfirmasi', 'refresh');
		} else {

			$data = array(
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'kode_bayar' => $this->input->post('kode_bayar'),
				'nominal' => $this->input->post('nominal'),
				'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
				'bukti_tf' => $this->upload->data('file_name'),
				'status' => "0"
			);

			$this->m_konfirmasi->tambah($data);

			$status = $this->input->post('status');

			if ($status == "1") {
				$kode_bayar = $this->input->post('kode_bayar');
				$this->m_konfirmasi->lunas($kode_bayar);
			}

			redirect('konfirmasi');
		}

	}

	public function accept($id)
	{	
		$data['nominal'] = $this->m_pembayaran->get_lihat($id);
		$this->m_konfirmasi->accept($id);
		$this->m_konfirmasi->lunas($id, $data['nominal'][0]->total_bayar);
		redirect('konfirmasi');
	}

	public function reject($id)
	{
		$this->m_konfirmasi->reject($id);
		redirect('konfirmasi');
	}

	public function delete($id)
	{
		$this->m_konfirmasi->delete($id);
		redirect('konfirmasi');
	}
}
