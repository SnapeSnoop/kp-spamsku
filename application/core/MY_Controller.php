<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    
  function render_page($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        $data['headernya'] = $this->load->view('header', $data, TRUE);
        $data['menunya'] = $this->load->view('menu', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
        $data['footernya'] = $this->load->view('footer', $data, TRUE);
        
        $this->load->view('index', $data);
    }
}
  
?>