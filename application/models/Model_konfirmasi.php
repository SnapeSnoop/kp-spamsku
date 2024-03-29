<?php

class Model_konfirmasi extends CI_Model
{

    function get_konfirmasi()
    {
        $data = $this->db->select('id, id_pelanggan, kode_bayar, nominal, tanggal_transaksi, bukti_tf, status')
            ->from('tb_konfirmasi')->where('status',0)
            ->get();
        //$this->db->where('status',1);    
        return $data->result();
    }

    function accept($id)
    {
        $data = array(
            'status' => 1,
        );
        $this->db->where('kode_bayar', $id);
        $this->db->update('tb_konfirmasi', $data);
    }

    function reject($id)
    {
        $data = array(
            'status' => 2,
        );
        $this->db->where('id', $id);
        $this->db->update('tb_konfirmasi', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_konfirmasi');
    }

    function tambah($data)
    {
        $query = $this->db->insert('tb_konfirmasi', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function lunas($kode_bayar, $nominal)
    {
        //$nominal = $this->input->post('nominal');

        $data = array(
            'jumlah_bayar' => $nominal,
            'status_bayar' => "Lunas"
        );

        $this->db->where('kode_bayar', $kode_bayar);
        $this->db->update('tb_pembayaran', $data);
    }
}
