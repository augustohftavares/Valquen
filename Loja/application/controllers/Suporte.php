<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suporte extends CI_Controller {

	function __construct() {

	/*
		Após a submissão de um formulário as mensagens geradas são apenas temporárias.
		Para tornar qualquer informação permanente devemos usar a library Session, nativa do CI.

		Sessions do tipo flashdata -> representam carregamento por impulso, isto é, ao mudar de página ou recarregando
		a página automaticamente são excluidas de memória.
	*/

		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('form',"url"));

	}//end constructor()

	// .../index.php/Contato_new/index
	// ...contato
	public function index() {

		$data['title'] = "Valquen - Suporte";

		$this->form_validation->set_rules('assunto', 'Assunto', 'required|min_length[3]');
		$this->form_validation->set_rules('mensagem', 'mensagem', 'required|min_length[10]');

		if($this->form_validation->run() == FALSE) {

			$data['formErrors'] = validation_errors();

		} else {

			$this->session->set_flashdata('success_msg', '<script>support()</script>');
			$data['formErrors'] = null;

			// Rotina de BD
			// ....

		}//end else

		$data['description'] = "Suporte para clientes";
		$this->load->view('suporte', $data);

	}//end index()

}//end class Blog
?>