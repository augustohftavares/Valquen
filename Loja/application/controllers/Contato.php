<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form',"url"));
	}

	public function index() {

		$data['title'] = "EPCC - Contato";
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[3]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');

		if($this->form_validation->run() == FALSE)
			$data['formErrors'] = validation_errors();
		else {
			$data['formErrors'] = null;
			$this->load->view('contato', $data);
		}

		$data['description'] = "EPCC Contato";
		$this->load->view('contato', $data);

	}

}
