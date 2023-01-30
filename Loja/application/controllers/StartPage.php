<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StartPage extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url');

	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Loja Online";
		$data['description'] = "description home page";
		$this->load->view('index', $data);
	}//end index

}

?>