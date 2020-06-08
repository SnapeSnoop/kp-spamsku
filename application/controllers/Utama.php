<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends MY_Controller {

	function index(){
		$this->render_page('home');
	}
}

?>