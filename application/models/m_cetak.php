<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak extends CI_Model {

    function get_cetak(){
         $data = $this->db->select('tb_tarif.id_tarif, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm ')
                        ->from('tb_tarif')
                        ->join('tb_pelanggan','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan',
                               'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap')
                        ->join('tb_golongan','tb_golongan.idgolongan=tb_tarif.idgolongan')
                        ->get();
        return $data->result();
    }

    function cetak($id){
       $data = $this->db->select('tb_tarif.id_tarif, tb_tarif.bulan_rekening, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm ')
                      ->from('tb_tarif')
                      ->join('tb_pelanggan','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan',
                             'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap')
                      ->join('tb_golongan','tb_golongan.idgolongan=tb_tarif.idgolongan')
                      ->where('bulan_rekening', $id)
                      ->get();
      return $data->result();
  }
    
    public function filter_month($where){
		$data = $this->db->select('tb_tarif.id_tarif, tb_tarif.bulan_rekening, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm,  ')
                        ->from('tb_tarif')
                        ->join('tb_pelanggan','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan',
                               'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap')
                        ->join('tb_golongan','tb_golongan.idgolongan=tb_tarif.idgolongan')
                        ->where('bulan_rekening', $where)
                        ->get();
        return $data->result();
	}
}
?>