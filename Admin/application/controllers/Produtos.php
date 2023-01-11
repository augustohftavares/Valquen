<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('produtos_model');
	}

	public function index() {
		$data['title'] = "Valquen - Produtos";
		$this->load->view('Produtos/index', $data);
	}

	public function lista_produtos() {
		$data['title'] = "Valquen - Lista de produtos";
		$produtos =  $this->produtos_model->GetAll('title');
		$data['produtos'] = $this->produtos_model->Modelar($produtos);

		$this->load->view('Produtos/lista',$data);
	}

	public function add() {
		$data['title'] = "Valquen - Adicionar Produto";
		$produtos =  $this->produtos_model->GetAll('title');
		$data['produtos'] = $this->produtos_model->Modelar($produtos);

		$this->load->view('Produtos/add',$data);
	}

	/*
	 *
	 *
	 */
	public function Save(){

		$produtos = $this->produtos_model->GetAll('title');
		$data['produtos'] = $this->produtos_model->Modelar($produtos);
		$validacao = self::Validation();

		if($validacao){

			$produto = $this->input->post();
			$status = $this->produtos_model->Insert($produto);

			if(!$status)
				$this->session->set_flashdata('error', 'Não foi possível inserir o contato.');
			 else{

				$this->session->set_flashdata('success', '<script>productAddSuccess();</script>');
				redirect('lista', 'refresh');

			}//end else

		} else {

			// caso dê erro
			// criar classe para validar todos os formulários
			$this->session->set_flashdata('error',validation_errors('<p style="color: red;">* ','</p>'));

		}//end else

		$this->load->view('Produtos/add',$data);

	}
	/*
	 *
	 *
	 */
	public function Edit() {

		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('Produtos/lista', 'refresh');

		$data['produtos'] = $this->produtos_model->GetById($id);
		$this->load->view('Produtos/editar', $data);

	}//end Edit()

	/*
	 *
	 *
	 */
	public function Delete() {
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('produtos', 'refresh');

		$status = $this->produtos_model->Delete($id);

		if($status) {
			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar este contato. </p>');
		}
		else
			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar este contato. </p>');

		redirect('lista', 'refresh');
	}

	/*
	 *
	 *
	 */
	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$produtos = $this->input->post();
			$status = $this->produtos_model->Update($produtos['id'], $produtos);

			if(!$status) {
				$this->session->set_flashdata('error', 'Não foi possível atualizar o produto.');
			} else {
				$this->session->set_flashdata('success', 'Produto atualizado com sucesso.');
				redirect('lista', 'refresh');
			}
		}

	}


	/*
	 *
	 *
	 */
	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'save':
			case 'update':
			case 'insert':
				$rules['title'] = array('trim', 'required', 'min_length[3]');
				$rules['price'] = array('trim', 'required', 'numeric');
				$rules['details'] = array('trim', 'required', 'min_length[10]');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('title', 'Título', $rules['title']);
		$this->form_validation->set_rules('price', 'Preço', $rules['price']);
		$this->form_validation->set_rules('details', 'Detalhes', $rules['details']);
		
		return $this->form_validation->run();
	}

}

?>
