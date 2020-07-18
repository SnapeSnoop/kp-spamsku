<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_golongan extends CI_Model {

	function get_golongan(){
		$data = $this->db->select('*')
						->from('tb_golongan')
						->get();
		return $data->result();
	}

	function tambah($data){
		$this->db->insert('tb_golongan',$data);
	}

	function edit($where,$data){
		$this->db->update('tb_golongan',$data,$where);
	}

	function hapus($where){
		$this->db->delete('tb_golongan',$where);
	}
}
