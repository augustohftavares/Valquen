<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StartPage extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}//end constructor

	public function index() {

		$this->load->model('product_model');
		$data['title'] = "Valquen - Loja Online";
		$data['hotProducts'] = $this->HotProducts();

		$this->load->view('index', $data);
	}//end index

	private function HotProducts() {

		$hot = $this->db->query('SELECT * FROM product WHERE hot = 1');
		return $hot->result();

	}//end HotProducts

}//end class StartPage
?>
