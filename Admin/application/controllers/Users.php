<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index() {
		$data['title'] = "Valquen - Utilizadores";
		$this->load->view('Users/index', $data);
	}

	public function lista() {
		$data['title'] = "Valquen - Lista de utilizadores";
		$users =  $this->users_model->GetAll('firstName');
		$data['users'] = $this->users_model->Modelar($users);

		$this->load->view('Users/lista',$data);
	}

	public function Edit() {

		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('Users/lista', 'refresh');

		$data['users'] = $this->users_model->GetById($id);
		$this->load->view('Users/editar', $data);

	}//end Edit()

	/*
	 *
	 *
	 */
	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$users = $this->input->post();
			$status = $this->users_model->Update($users['id'], $users);

			if(!$status)
				$this->session->set_flashdata('error_users', 'Não foi possível atualizar o produto.');
			else {
				$this->session->set_flashdata('success', '<script>productUpdatedSuccess();</script>');
				redirect('lista_utilizadores', 'refresh');
			}
		} else
			$this->session->set_flashdata('error_users',validation_errors('<p style="color: red;">* ','</p>'));
	}


	/*
	 *
	 *
	 */
	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'save':
			case 'update':
				$rules['firstName'] = array('trim', 'required', 'min_length[3]');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('firstName', 'PrimeiroNome', $rules['firstName']);
		return $this->form_validation->run();
	}

}



?>
