<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	/*
		Para validar um formulário, será usada a library From_Validation, nativa do CI.

		O helper Form, vai permitir montar os formulários usando métodos nativos do CI.

		Podem incluir no autoload, mas uma vez que usamos apenas nos forms de contato, devemos incluir
		via construct ou diretamente no metodo
	*/

	function __construct() {

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form',"url"));

	}//end constructor()

	// .../index.php/Contato/index
	// ...contato
	public function index() {

		$data['title'] = "EPCC - Contato";

		/*
			Sintaxe:
				$this->form_validation->set_rules(nome, descricao, regras);
				nome -> name no input
				descricao -> msg a exibir;
				regras:
					required -> obrigatório
					min_length[3] -> caracteres min.
					trim -> espaços em branco antes e depois do valor do campo;
		*/
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[3]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');

		// verifica se houve erros de preenchimento
		if($this->form_validation->run() == FALSE) {

			//validation_errors() - recupera as mensagens de erro.
			$data['formErrors'] = validation_errors();
			/*
				Diretamente na vista
				<?php echo validation_errors('<div class="alert">' '</div>); ?>
			*/

		}else {

			$data['formErrors'] = null;
			$this->load->view('contato', $data);

		}//end else

		$data['description'] = "EPCC Contato";
		$this->load->view('contato', $data);

	}//end index()

}//end class Blog
