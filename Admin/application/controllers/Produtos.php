<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->helper('url');

	}//end constructor()

	public function index() {
		$data['title'] = "Valquen - Produtos";
		$this->load->view('Produtos/index', $data);
	}

	public function lista_produtos() {
		$data['title'] = "Valquen - Lista de produtos";
		$this->load->view('Produtos/lista', $data);
	}

}

?>
