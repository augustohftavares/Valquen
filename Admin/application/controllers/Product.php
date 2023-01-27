<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Produtos";
		$products =  $this->product_model->GetAll('title');
		$data['product'] = $this->product_model->Modelar($products);

		$this->load->view('Product/index', $data);
	}//end index()

}

?>
