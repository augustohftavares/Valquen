<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lojas extends CI_Controller {

	function __construct() {

		parent::__construct();

	}//end constructor()

	// .../index.php/Contato_new/index
	// ...contato
	public function index() {

		$data['title'] = "Valquen - Lojas";
		$this->load->view('lojas', $data);

	}//end index()


}//end class Lojas
