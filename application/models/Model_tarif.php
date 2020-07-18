<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tarif extends CI_Model {

	function rekening_id($id){
		$query = $this->db->query("SELECT * from tb_pelanggan p left join tb_golongan g on p.idgolongan=g.idgolongan where p.no_pelanggan='$id'");
		if($query->num_rows() > 0 ){
            foreach ($query->result() as $data) {
                $hasil=array(
                    'no_pelanggan' => $data->no_pelanggan,
                    'nama' => $data->nama_lengkap,
                    'golongan' => $data->golongan,
                    'gol1' => $data->gol1,
                    'gol2' => $data->gol2,
                    'gol3' => $data->gol3,
                    'idgolongan' => $data->idgolongan,
                    'air' => $data->biaya_air,
                    'adm' => $data->biaya_adm,
                    );
            }
        }
        return $hasil;
    }


	function get_tarif(){
		$data = $this->db->select('*')
						->from('tb_tarif')
						->join('tb_pelanggan','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan')
						->join('tb_golongan','tb_tarif.idgolongan=tb_golongan.idgolongan')
						->get();
		return $data->result();
    }
    
    function get_tarif_transaction($id_tarif){

        $data = $this->db->select('tb_tarif.id_tarif, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, tb_golongan.golongan, tb_tarif.bulan_rekening, tb_tarif.mawal, tb_tarif.makhir, tb_tarif.pemakaian, tb_tarif.total_bayar, tb_golongan.biaya_adm, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_golongan.gol1 as hgol1, tb_golongan.gol2 as hgol2, tb_golongan.gol3 as hgol3 ')
						->from('tb_tarif')
						->join('tb_pelanggan','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan')
                        ->join('tb_golongan','tb_tarif.idgolongan=tb_golongan.idgolongan')
                        ->where('id_tarif',$id_tarif)
						->get();
		return $data->result();

    }

	function tambah($data){
		$this->db->insert('tb_tarif',$data);
    }
    
    function count_tarif(){
        $query = $this->db->get('tb_tarif');
        return $query->num_rows();
    }
    
    function get_previous_usage_by_month($id_pelanggan){
        $query = $this->db->query("SELECT bulan_rekening, no_pelanggan, makhir
        FROM tb_tarif
        WHERE MONTH(bulan_rekening) = MONTH(NOW()) - 1 AND no_pelanggan = '$id_pelanggan' ORDER BY `bulan_rekening` DESC LIMIT 1");

        if($query->num_rows() > 0 ){
            foreach ($query->result() as $data) {
                $hasil=array(
                    'bulan_rekening' => $data->bulan_rekening,
                    'no_pelanggan' => $data->no_pelanggan,
                    'makhir' => $data->makhir,);
            }
        }else{
            $hasil = array('status' => 'Data tidak ditemukan');
        }
        return $hasil;
    }

    function hapus($where){
		$query = $this->db->delete('tb_tarif',$where);
	}

}
?>