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
			redirect(base_url("lista_utilizadores"), 'refresh');

		$data['users'] = $this->users_model->GetById($id);
		$this->load->view('Users/editar', $data);

	}

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
				$this->session->set_flashdata('success', '<script>userUpdatedSuccess();</script>');
				redirect(base_url("lista_utilizadores"), 'refresh');
			}
		} else
			$this->session->set_flashdata('error_users',validation_errors('<p style="color: red;">* ','</p>'));
	}

	/*
	 *
	 *
	 */
	public function Delete() {
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('users', 'refresh');

		$status = $this->users_model->Delete($id);

		if($status) {
			$this->session->set_flashdata('success', '');
			redirect(base_url("lista_utilizadores"), 'refresh');
		} else
			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar este contato. </p>');
	}


	/*
	 *
	 *
	 */
	private function Validation($operacao = 'update'){

		switch($operacao){
			case 'update':
				$rules['firstName'] = array('trim', 'required', 'min_length[3]', 'max_length[30]');
				$rules['lastName'] = array('trim', 'required', 'min_length[3]', 'max_length[30]');
				$rules['email'] = array('trim', 'required', 'valid_email');
				$rules['mobile'] = array('trim', 'required', 'numeric');
				$rules['description'] = array('trim', 'required', 'min_length[10]');
				$rules['admin'] = array('trim', 'required');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('firstName', 'Primeiro Nome', $rules['firstName']);
		$this->form_validation->set_rules('lastName', 'Último Nome', $rules['lastName']);
		$this->form_validation->set_rules('email', 'Email', $rules['email']);
		$this->form_validation->set_rules('mobile', 'Telefone', $rules['mobile']);
		$this->form_validation->set_rules('description', 'Descrição', $rules['description']);
		$this->form_validation->set_rules('admin', 'Admin ?', $rules['admin']);
		return $this->form_validation->run();
	}

	public function dateFormat($format='d-m-Y', $givenDate=null) {
		return date($format, strtotime($givenDate));
	}

}



?>
