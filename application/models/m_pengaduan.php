<?php

class M_pengaduan extends CI_Model {

	function get_pengaduan(){
		$data = $this->db->select('*')
						->from('tb_pengaduan')
						->get();
		return $data->result();
	}

	function tambah($data){
		$query = $this->db->insert('tb_pengaduan',$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	function edit($data,$where){
		$this->db->update('tb_pengaduan',$data,$where);
	}

	function hapus($where){
		$query = $this->db->delete('tb_pengaduan',$where);
	}
}
?>