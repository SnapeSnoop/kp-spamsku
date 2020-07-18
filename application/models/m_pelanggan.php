<?php

class m_pelanggan extends CI_Model {

	function get_pelanggan(){
		$data = $this->db->select('*')
						->from('tb_pelanggan')
						->join('tb_golongan','tb_golongan.idgolongan=tb_pelanggan.idgolongan')
						->get();
		return $data->result();
	}

	function tambah($data){
		$query = $this->db->insert('tb_pelanggan',$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	function edit($data,$where){
		$this->db->update('tb_pelanggan',$data,$where);
	}

	function hapus($where){
		$query = $this->db->delete('tb_pelanggan',$where);
	}

	function count_customer(){
        $query = $this->db->get('tb_pelanggan');
        return $query->num_rows();
	}
}
?>