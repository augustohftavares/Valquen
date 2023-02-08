<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
    $this->load->model('user_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Utilizadores";
		$users = $this->user_model->GetAll('name');
		$data['user'] = $this->user_model->Modelar($users);
		$this->load->view('User/index', $data);
	}//end index

	public function edit() {

		$data['title'] = "PSR - Editar Utilizador";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("ocorrencias"), 'refresh');

		$data['user'] = $this->user_model->GetById($id);

		$this->load->view('User/edit', $data);
	}//end edit

	public function details() {
		$data['title'] = "Valquen - Detalhes Utilizador";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("utilizadores"), 'refresh');

		$data['user'] = $this->user_model->GetById($id);
		$this->load->view('User/details', $data);
	}//end details

	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$user = $this->input->post();
			$status = $this->user_model->Update($user['id'], $user);

			if(!$status)
				$this->session->set_flashdata('error', 'Não foi possível atualizar o produto.');

			else {
				$this->session->set_flashdata('success', '<script>userUpdatedSuccess();</script>');
				redirect(base_url("utilizadores"), 'refresh');
			}
		}
	}//end update

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'update':
			case 'insert':
			$rules['name'] = array('trim', 'required', 'min_length[3]');
			$rules['surname'] = array('trim', 'required', 'min_length[3]');
			$rules['email'] = array('trim', 'required', 'min_length[3]');
			$rules['phone'] = array('trim');
				break;
			default:
				break;
		}
		$this->form_validation->set_rules('name', 'Nome', $rules['name']);
		$this->form_validation->set_rules('surname', 'Apelido', $rules['surname']);
		$this->form_validation->set_rules('email', 'Endereço de e-mail', $rules['email']);
		$this->form_validation->set_rules('phone', 'Telemóvel', $rules['phone']);
		return $this->form_validation->run();
	}//end Validation

}//end class User

?>
