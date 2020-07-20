<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('convertRupiah')){
  function convertRupiah($value) {
      return 'Rp ' . number_format($value);
  }
}    

?>