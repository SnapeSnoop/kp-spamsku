<?php

class M_cetak extends CI_Model {

    function get_cetak(){
         $data = $this->db->select('*')
                        ->from('tb_pembayaran')
                        ->join('tb_pelanggan','tb_pembayaran.no_pelanggan=tb_pelanggan.no_pelanggan',
                               'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap')
                        ->join('tb_golongan','tb_golongan.idgolongan=tb_pelanggan.idgolongan')
                        ->get();

        return $data->result();
    }

}

?>