<?php

class M_konfirmasi extends CI_Model {

    function get_konfirmasi(){
        $data= $this->db->select('*')
                ->from('tb_konfirmasi')
                ->get();
        return $data->result();
    }

  

}

?>