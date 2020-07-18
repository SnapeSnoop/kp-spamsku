<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	//test

	function login_admin($username,$password){
		$query = $this->db->query("SELECT * from tb_admin where username='$username' and password='$password'");
		return $query;
	}
}
?>