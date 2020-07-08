<?php 

class Pembayaran extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pembayaran');
	}

	function index(){
		$this->load->model('m_tarif');
		$data = array(
			'tarif' => $this->m_tarif->get_tarif(),
		);

		$this->render_page('v_pembayaran', $data);
	}

	function datapembayaran(){
		$data = array(
			'databayar' => $this->m_pembayaran->get_databayar(),
		);
		$this->render_page('v_datapembayaran',$data);
	}

	function get_transaction(){
		$this->load->model('m_tarif');
		$id = $this->input->post('id_tarif');
		$sta = 'Belum bayar';
		$data = $this->m_tarif->get_tarif_transaction($id,$sta);
		echo json_encode($data);
	}

	function action_tambah(){
		$id = $this->input->post('id_tarif');
		$status_bayar = $_POST['jumlah'] >= $_POST['total_bayar'] ? 'Lunas' : 'Belum Lunas';
		$data = array(
			'kode_bayar' => $this->input->post('kode'),
			'no_pelanggan' => $this->input->post('no_pelanggan'),
			'bulan_bayar' => $this->input->post('bulan'),
			'jumlah_bayar' => "",
			'tanggal_bayar' => $this->input->post('tgl'),
			'gol1_bayar' => $this->input->post('sum_gol1'),
			'gol2_bayar' => $this->input->post('sum_gol2'),
			'gol3_bayar' => $this->input->post('sum_gol3'),
			'total_bayar' => $this->input->post('total_bayar'),
			'status_bayar' => $status_bayar
		);
		$data2 = array(
			'status' => $status_bayar
		);
		$where = array('id_tarif' => $id);	
		$this->m_pembayaran->tambah($data,$where,$data2);
		redirect('pembayaran/detail/'.$_POST['no_pelanggan']);
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

	function action_hapus($id){
		$where=array('kode_bayar'=>$id);
        $this->m_pembayaran->hapus($where);
        //redirect
        redirect('pembayaran/detail/');
    }

	
}
