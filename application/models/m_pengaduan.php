<?php

class M_pengaduan extends CI_Model
{

	function get_pengaduan()
	{
		$data = $this->db->select('*')
			->from('tb_pengaduan')
			->get();
		return $data->result();
	}

	function tambah($data)
	{
		require APPPATH . 'views/vendor/autoload.php';
		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			'd675950e5a7c2de95557',
			'52870c8229ddc5979c97',
			'1036649',
			$options
		);

		$nf['message'] = 'Data Keluhan Berhasil Ditambahkan';
		$pusher->trigger('my-channel', 'my-event', $nf);

		$query = $this->db->insert('tb_pengaduan', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}

		
	}

	function edit($data, $where)
	{
		$this->db->update('tb_pengaduan', $data, $where);
	}

	function hapus($where)
	{
		$query = $this->db->delete('tb_pengaduan', $where);
	}

	function count_pengaduan()
	{
		$query = $this->db->get('tb_pengaduan');
		return $query->num_rows();
	}
}
