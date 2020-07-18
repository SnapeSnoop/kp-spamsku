<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cetak','m_cetak');
	}

	function index()
	{
		$data = array(
			'cetak' => $this->m_cetak->get_cetak(),
			'bulan' => $this->m_cetak->get_bulan(),
			'tahun' => $this->m_cetak->get_tahun()
		);
		$this->render_page('v_cetakpembayaran', $data);
	}

	function cetak($id){
		$where = $id;
		$data['cetak'] = $this->m_pembayaran->cetak($where);
		$this->render_page('v_print', $data);
	}

	public function cetak_pdf() {
		// load view yang akan digenerate atau diconvert
		$data = array(
		  'record' => $this->m_cetak->get_cetak()
		);
		$this->load->view('v_cetak',$data);
		// dapatkan output html
		$html = $this->output->get_output();
		// Load/panggil library dompdfnya
		$this->load->library('dompdf_gen');
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->set_paper('a4', 'landscape');
		$this->dompdf->render();
		//utk menampilkan preview pdf
		// $this->dompdf->stream("pembayaran.pdf",array('Attachment'=>0));
		//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
		$this->dompdf->stream("pembayaran.pdf");
		redirect('cetak');
	}

}
