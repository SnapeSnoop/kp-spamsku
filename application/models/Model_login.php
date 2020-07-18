<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	//testss

	function login_admin($username,$password){
		$query = $this->db->query("SELECT * from tb_admin where username='$username' and password='$password'");
		return $query;
	}
}
?>