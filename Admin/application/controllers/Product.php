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

	public function add() {
		$data['title'] = "Valquen - Adicionar Produto";
		$product =  $this->product_model->GetAll('title');
		$data['product'] = $this->product_model->Modelar($product);
		$this->load->view('Product/add', $data);
	}

	public function edit() {
		$data['title'] = "Valquen - Editar Produto";
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect(base_url("ocorrencias"), 'refresh');

		$data['product'] = $this->product_model->GetById($id);

		$this->load->view('Product/edit', $data);
	}

	public function detail() {
		$data['title'] = "Valquen - Detalhes Produto";
		$id = $this->uri->segment(2);
		if(is_null($id))
			redirect(base_url("produtos"), 'refresh');

		$data['product'] = $this->product_model->GetById($id);

		$this->load->view('Product/details', $data);
	}

	public function Save(){
		$data['title'] = "Valquen - Adicionar Ocurrência";
		$validacao = self::Validation();

		if($validacao){

			$products = $this->input->post();
			$status = $this->product_model->Insert($products);

			if(!$status) {
				$this->session->set_flashdata('error', 'Não foi possível inserir a ocorrência.');
			} else {
				$this->session->set_flashdata('success', '<script>ocurrenceAddSuccess();</script>');
				redirect(base_url("produtos"), 'refresh');
			}

		} else {
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
			redirect(base_url("adicionar_produto"));

		}

		$this->load->view('Ocurrences/add',$data);
	}

	public function Update() {

		$validacao = self::Validation('update');

		if($validacao) {

			$product = $this->input->post();
			$status = $this->product_model->Update($product['id'], $product);

			if(!$status) {
				$this->session->set_flashdata('error', 'Não foi possível atualizar o produto.');
				header("Refresh:0");
			} else {
				$this->session->set_flashdata('success', '<script>ocurrenceUpdatedSuccess();</script>');
				redirect(base_url("produtos"), 'refresh');
			}
		} else {
			$this->session->set_flashdata('error',validation_errors('<p class="validationErrors">* ','</p>'));
		}
	}

	public function Delete() {
		$id = $this->uri->segment(2);

		if(is_null($id))
			redirect('ocorrencias', 'refresh');

		$status = $this->product_model->Delete($id);

		if($status) {
			$this->session->set_flashdata('success', '');
			redirect(base_url("produtos"), 'refresh');
		} else
			$this->session->set_flashdata('error', '<p>Erro ao tentar eliminar esta ocorrência. </p>');
	}

	private function Validation($operacao = 'insert'){

		switch($operacao){
			case 'update':
			case 'insert':
				$rules['title'] = array('trim', 'required', 'min_length[3]');
				break;
			default:
				break;
		}

		$this->form_validation->set_rules('title', 'Título', $rules['title']);
		return $this->form_validation->run();
	}

}

?>
