<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tarif extends CI_Model {

	function rekening_id($id){
		$query = $this->db->query("SELECT * from tb_pelanggan p left join tb_golongan g on p.idgolongan=g.idgolongan where p.no_rekening='$id'");
		if($query->num_rows() > 0 ){
            foreach ($query->result() as $data) {
                $hasil=array(
                    'norekening' => $data->no_rekening,
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

        $data = $this->db->select('*')
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
}
?>