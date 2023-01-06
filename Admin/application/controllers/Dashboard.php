<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url');

	}//end constructor()

	// .../index.php/dashboard/index
	// .../index.php/dashboard
	public function index() {
		// Passagem entre controller e view
		$data['title'] = "Valquen - Admin";
		$this->load->view('index', $data);
	}//end index()

}

?>
