<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'product';
	}
	

	function Modelar($produtos){

		if($produtos) {
			for($i = 0; $i < count($produtos); $i++) {
				$produtos[$i]['edit_url']= base_url('edit_produto'."/".$produtos[$i]['id']);
				$produtos[$i]['del_url'] = base_url('delete_produto'."/".$produtos[$i]['id']);
			}
			return $produtos;
		} else
			return false;
	}

}
