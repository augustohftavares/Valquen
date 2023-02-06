<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('contact_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Atendimento ao Cliente";
		$this->load->view('Contact/index', $data);
	}//end index

	public function Save(){
		$data['title'] = "Valquen - Atendimento ao Cliente";
		$validacao = self::Validation();

		if($validacao){

			$contact = $this->input->post();
			$status = $this->contact_model->Insert($contact);

			if(!$status) {
				$this->session->set_flashdata('error', 'Não foi possível enviar o formulário.');
			} else {
				$this->session->set_flashdata('success', 'Enviado com sucesso.');
				redirect(base_url("atendimento_ao_cliente"), 'refresh');
			}

		} else {
			$this->session->set_flashdata('error', 'Preencha todos os campos obrigatórios.');
			redirect(base_url("atendimento_ao_cliente"));
		}
		$this->load->view('Contact/index',$data);
	}//end Save

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'update':
			case 'insert':
			$rules['user_name'] = array('trim', 'required', 'min_length[3]');
			$rules['user_surname'] = array('trim', 'required', 'min_length[3]');
			$rules['user_email'] = array('trim', 'required', 'valid_email');
			$rules['theme'] = array('trim', 'required');
			$rules['message'] = array('trim', 'required');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('user_name', 'Nome', $rules['user_name']);
		$this->form_validation->set_rules('user_surname', 'Apelido', $rules['user_surname']);
		$this->form_validation->set_rules('user_email', 'Endereço de e-mail', $rules['user_email']);
		$this->form_validation->set_rules('theme', 'Tema', $rules['theme']);
		$this->form_validation->set_rules('message', 'Mensagem', $rules['message']);
		return $this->form_validation->run();
	}//end Validation

}//end class StartPage
?>
