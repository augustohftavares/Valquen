<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url');

	}//end constructor()

	// .../index.php/raiz/index
	// .../index.php/raiz
	public function index() {
		// Passagem entre controller e view
		$data['title'] = "Valquen - Loja Online";
		$data['description'] = "description home page";
		$this->load->view('home', $data);
	}//end index()

	public function promocoes() {
		$data['title'] = "Valquen - Promoções";
		$this->load->view('promocoes', $data);
	}

	public function avalquen() {
		$data['title'] = "Valquen - Sobre nós";

		$this->load->view('avalquen', $data);
	}
}

?>
