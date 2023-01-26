<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Dashboard";
		$this->load->view('Dashboard/index', $data);
	}//end index()

}

?>
