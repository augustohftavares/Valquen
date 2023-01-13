<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suporte extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('suportes_model');
	}

	public function index() {
		$data['title'] = "Valquen - Suporte";
		$suportes =  $this->suportes_model->GetAll('id');
		$data['suportes'] = $this->suportes_model->Modelar($suportes);

		$this->load->view('Suporte/index', $data);
	}

	public function ver() {
		$data['title'] = "Valquen - Suporte Detalhes";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("index"), 'refresh');

		$data['suportes'] = $this->suportes_model->GetById($id);

		$this->load->view('Suporte/ver', $data);
	}
}

?>
