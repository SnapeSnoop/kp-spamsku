<?php 

class Pembayaran extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pembayaran');
	}

	function index(){
		$this->render_page('v_pembayaran');
	}

	function datapembayaran(){
		$data = array(
			'databayar' => $this->m_pembayaran->get_databayar(),
		);
		$this->render_page('v_datapembayaran',$data);
	}

	function get_pelanggan(){
		$id = $this->input->post('no_pelanggan');
		$sta = 'Belum bayar';
		$data = $this->m_pembayaran->pelanggan_id($id,$sta);
		echo json_encode($data);
	}

	function action_tambah(){
		$id = $this->input->post('idtarif');
		$data = array(
			'kode_bayar' => $this->input->post('kode'),
			'no_pelanggan' => $this->input->post('no_pelanggan'),
			'bulan_bayar' => $this->input->post('bulan'),
			'jumlah_bayar' => $this->input->post('jumlah'),
			'tanggal_bayar' => $this->input->post('tgl'),
			'status_bayar' => 'Lunas'
		);

		$data2 = array(
			'status' => 'Lunas'
		);	

		$where = array('id_tarif' => $id);	

		$this->m_pembayaran->tambah($data,$where,$data2);
		redirect('pembayaran');
	}

	function detail($id){
		$where = $id; 
		$data['pelanggan'] = $this->m_pembayaran->get_pelanggan($where);
		$data['detail'] = $this->m_pembayaran->get_detail($where);

		$this->render_page('v_detailpembayaran',$data);
		}


	function lihat($id){
		$where = $id;
		$data['lihatbayar'] = $this->m_pembayaran->get_lihat($where);
		$this->render_page('v_lihatpembayaran',$data);
	}

	function cetak($id){
		$where = $id;
		$data['lihatbayar'] = $this->m_pembayaran->get_lihat($where);
		$this->load->view('v_cetakstruck',$data);
	}

	
}
?>