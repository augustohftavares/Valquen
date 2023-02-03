<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('product_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Dashboard";

		// COUNT USERS
		$users =  $this->user_model->GetAll('name');
		$data['usersTotal'] = count($users);

		//COUNT PRODUCTS
		$products =  $this->product_model->GetAll('title');
		$data['productsTotal'] = count($products);

		$this->load->view('Dashboard/index', $data);
	}//end index()

}

?>
