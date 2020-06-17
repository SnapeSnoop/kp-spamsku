<?php

class M_pembayaran extends CI_Model {

	function pelanggan_id($id,$sta){
        $sta ='Belum bayar';
		$query = $this->db->select('*')
                            ->from('tb_pelanggan')
                            ->join('tb_golongan','tb_pelanggan.idgolongan=tb_golongan.idgolongan')
                            ->join('tb_tarif','tb_tarif.no_pelanggan=tb_pelanggan.no_pelanggan')
                            ->where('tb_tarif.status',$sta,'tb_pelanggan.no_pelanggan',$id)
                            ->get();
		if($query->num_rows() > 0 ){
            foreach ($query->result() as $data) {
                $hasil=array(
                    'idtarif' => $data->id_tarif,
                    'no_pelanggan' => $data->no_pelanggan,
                    'no_rekening' => $data->no_rekening,
                    'nama_lengkap' => $data->nama_lengkap,
                    'pekerjaan' => $data->pekerjaan,
                    'alamat' => $data->alamat,
                    'golongan' => $data->golongan,
                    'bulan' => $data->bulan_rekening,
                    'mawal' => $data->mawal,
                    'makhir' => $data->makhir,
                    'pakai' => $data->pemakaian,
                    'biaya_adm' => $data->biaya_adm,
                    'total_bayar' => $data->total_bayar,
                    );
            }
        }
        return $hasil;
    }

    function get_databayar(){
        $data= $this->db->select('*')
                ->from('tb_pembayaran')
                ->join('tb_pelanggan','tb_pembayaran.no_pelanggan=tb_pelanggan.no_pelanggan')
                ->join('tb_golongan','tb_golongan.idgolongan=tb_pelanggan.idgolongan')
                ->group_by('tb_pembayaran.no_pelanggan')
                ->get();
        return $data->result();
    }

    function tambah($data,$where,$data2){
    	$this->db->insert('tb_pembayaran',$data);
        $this->db->update('tb_tarif',$data2,$where);
       
    }

    function get_detail($where){
        $data = $this->db->select('*')
                        ->from('tb_pembayaran')
                        ->where('no_pelanggan',$where)
                        ->get();
        return $data->result();
    }

    function get_pelanggan($where){
        $data = $this->db->select('*')
                        ->from('tb_pelanggan')
                        ->where('no_pelanggan',$where)
                        ->group_by('no_pelanggan')
                        ->get();
        return $data->result();

    }

    function get_lihat($where){
        $data = $this->db->select('*')
                        ->from('tb_pembayaran')
                        ->join('tb_pelanggan','tb_pembayaran.no_pelanggan=tb_pelanggan.no_pelanggan')
                        ->join('tb_golongan','tb_golongan.idgolongan=tb_pelanggan.idgolongan')
                        ->where('tb_pembayaran.kode_bayar',$where)
                        ->get();
        return $data->result();
    }


}

?>