<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class M_kasir extends CI_Model {

	function get_kasir(){
		$query = $this->db->select('*')
							->from('tb_petugas')
							->get();
		return $query->result();
	}

	function tambah($data){
		$this->db->insert('tb_petugas',$data);
	}

	function edit($where,$data){
		$this->db->update('tb_petugas',$data,$where);
	}

	function hapus($where){
		$this->db->delete('tb_petugas',$where);
	}
	
}
?>