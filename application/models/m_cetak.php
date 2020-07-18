<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_cetak extends CI_Model
{

       function get_cetak()
       {
              $this->db->select('tb_tarif.id_tarif, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm ')
                     ->from('tb_tarif')
                     ->join('tb_pelanggan', 'tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan')
                     ->join('tb_golongan', 'tb_golongan.idgolongan=tb_tarif.idgolongan');
              if ($this->input->post('bulan_rekening') && $this->input->post('tahun_rekening')) {
                     $bulan = $this->input->post('bulan_rekening');
                     $tahun = $this->input->post('tahun_rekening');
                     $this->db->where('MONTH(bulan_rekening) = ' . $bulan, null, false);
                     $this->db->where('YEAR(bulan_rekening) = ' . $tahun, null, false);
              }
              $data = $this->db->get();
              return $data->result();
       }

       function get_bulan()
       {
              $data = $this->db->select('DISTINCT(MONTH(bulan_rekening)) AS bulan, MONTHNAME(bulan_rekening) AS nama_bulan')
                     ->from('tb_tarif')
                     ->group_by('bulan')
                     ->get();
              return $data->result();
       }

       function get_tahun()
       {
              $data = $this->db->select('DISTINCT(YEAR(bulan_rekening)) AS tahun')
                     ->from('tb_tarif')
                     ->group_by('tahun')
                     ->get();
              return $data->result();
       }

       function cetak($id)
       {
              $data = $this->db->select('tb_tarif.id_tarif, tb_tarif.bulan_rekening, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm ')
                     ->from('tb_tarif')
                     ->join(
                            'tb_pelanggan',
                            'tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan',
                            'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap'
                     )
                     ->join('tb_golongan', 'tb_golongan.idgolongan=tb_tarif.idgolongan')
                     ->where('bulan_rekening', $id)
                     ->get();
              return $data->result();
       }

       public function filter_month($where)
       {
              $data = $this->db->select('tb_tarif.id_tarif, tb_tarif.bulan_rekening, tb_golongan.golongan, tb_tarif.no_pelanggan, tb_pelanggan.nama_lengkap, mawal, makhir, tb_tarif.gol1, tb_tarif.gol2, tb_tarif.gol3, tb_tarif.pemakaian, tb_golongan.gol1 as h_gol1, tb_golongan.gol2 as h_gol2, tb_golongan.gol3 as h_gol3, tb_golongan.biaya_adm,  ')
                     ->from('tb_tarif')
                     ->join(
                            'tb_pelanggan',
                            'tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan',
                            'tb_pembayaran.nama_lengkap=tb_pelanggan.nama_nama_lengkap'
                     )
                     ->join('tb_golongan', 'tb_golongan.idgolongan=tb_tarif.idgolongan')
                     ->where('bulan_rekening', $where)
                     ->get();
              return $data->result();
       }
}
