<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	// raiz/controller/action/parametros
	// .../index.php/blog/index
	// .../index.php/blog
	public function index() {

		// Passagem entre controller e view
		$data = array(
			'title' => 'Football Blog - Home',
			'heading' => 'Football Blog',
			'criador' => 'Augusto Tavares'
		);

		/* FORMA 1
		$this->load->view('comuns/header', $data);
		$this->load->view('blogview', $data);
		$this->load->view('comuns/footer', $data);

		FORMA 2*/ 
		$this->load->view('blogview', $data);
		
	}//end index()

	// .../index.php/blog/exemplo
	public function exemplo() {

		echo "Controller Blog Action (Exemplo)";

	}//end exemplo()

	// .../index.php/blog/exemploseg/id
	public function exseg($id, $value) {

		echo 'Controller Blog Action Exemplo Segmentos <br />';
		echo 'Id: ' . $id . '<br />';
		echo "Value: " . $value . '<br />';

	}//end exseg()

	
	public function exsegmentos(){

		$c = $this->uri->segment(0);
		$a = $this->uri->segment(1);
		$p1 = $this->uri->segment(2);
		$p2 = $this->uri->segment(3);
		$p3 = $this->uri->segment(4);

		echo 'c <> ' . $c . '<br />';
		echo 'a <> ' . $a . '<br />';
		echo 'parametro 1 <> ' . $p1 . '<br />';
		echo 'parametro 2 <> ' . $p2 . '<br />';
		echo 'parametro 3 <> ' . $p3 . '<br />';

	}//end exsegmentos()

}//end class Blog
