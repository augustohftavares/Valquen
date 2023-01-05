<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('contatos_model');

	}//end constructor
	
	public function index(){

		$data['title'] = "Contacts page";

		/* 
			se apenas este metodo usar o modelos
			$this->load->model('contatos_model'); 
		*/
		$contatos =  $this->contatos_model->GetAll('nome');
		$dados['contatos'] = $this->contatos_model->Modelar($contatos);
		$this->load->view('home_editar',$dados);
	}//end Index()

	// salva o contato selecionado para autopreencher(editar)
	public function Save(){
		$contatos = $this->contatos_model->GetAll('nome');
		$dados['contatos'] =$this->contatos_model->Modelar($contatos);
		
		$validacao = self::Validation();

		if($validacao){

			/*
			O CI de forma nativa consegue controlar os pedidos via metodo POST
			*/
			$contato = $this->input->post();
			$status = $this->contatos_model->Insert($contato);

			if(!$status)
				$this->session->set_flashdata('error', 'Não foi possível inserir o contato.');
			 else{

				$this->session->set_flashdata('success', 'Contato inserido com sucesso.');
				// refresh - como se fosse um f5, mas alterar para alterar certa parte
				redirect('base', 'refresh');

			}//end else

		} else {

			// caso dê erro
			// criar classe para validar todos os formulários
			$this->session->set_flashdata('error',validation_errors('<p>','</p>'));

		}//end else
		$this->load->view('home_editar',$dados);

	}//end Save()
	
	// projeto final criar um vista para tudo (edit,delete)
	public function Edit() {

		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('base', 'refresh');

		$dados['contato'] = $this->contatos_model->GetById($id);
		$this->load->view('editar', $dados);

	}//end Edit()


	public function Delete() {

		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('base', 'refresh');

		$status = $this->contatos_model->Delete($id);

		if($status) {

			$this->session->set_flashdata('success', '<p>Contato eliminado com sucesso. </p>');

		} else {

			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar este contato. </p>');

		} //end else

		redirect('base', 'refresh');

	}//end Delete()

	public function Update() {

		//buscar as regras do update
		$validacao = self::Validation('update');

		if($validacao) {

			$contato = $this->input->post();
			$status = $this->contatos_model->Update($contato['id'], $contato);

			if(!$status) {

				$this->session->set_flashdata('error', 'Não foi possível atualizar o contato.');

			} else {

				$this->session->set_flashdata('success', 'Contato atualizado com sucesso.');
				redirect('base', 'refresh');

			}//end else

		}//end if

	}//end Update()


	private function Validation($operacao = 'insert'){

		switch($operacao){
			/* 
				----->caso real<-----
				case 'insert':
				case 'update':
					$rules['nome'] = array('trim', 'required', 'min_length[3]');
					$rules['email'] = array('trim', 'required', 'valid_email', 'is_unique[contatos.email]');
					break;

				para melhorar criar uma classe/ classe abstract
			*/
			case 'insert':
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
				$rules['email'] = array('trim', 'required', 'valid_email', 'is_unique[contatos.email]');
				break;

			case 'update':
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
				$rules['email'] = array('trim', 'required', 'valid_email');
				break;

			default:
				$rules['nome'] = array('trim', 'required', 'min_length[3]');
		}//end switch

		$this->form_validation->set_rules('nome', 'Nome', $rules['nome']);
		$this->form_validation->set_rules('email', 'Email', $rules['email']);

		return $this->form_validation->run();
	}
	
}
