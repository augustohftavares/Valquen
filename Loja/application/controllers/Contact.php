<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Atendimento ao Cliente";
		$this->load->view('Contact/index', $data);
	}//end index

}//end class StartPage
?>
