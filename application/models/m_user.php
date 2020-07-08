<?php

class M_user extends CI_Model {

	function get_user(){
		$data = $this->db->select('*')
						->from('tb_user')
						->get();
		return $data->result();
	}

	function tambah($data){
		$query = $this->db->insert('tb_user',$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	function edit($data,$where){
		$this->db->update('tb_user',$data,$where);
	}

	function hapus($where){
		$query = $this->db->delete('tb_user',$where);
	}

	function count_customer(){
        $query = $this->db->get('tb_user');
        return $query->num_rows();
	}
}
?>