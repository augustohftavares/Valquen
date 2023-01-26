<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
    $this->load->model('user_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Utilizadores";
		$this->load->view('User/index', $data);
	}//end index()

}

?>
