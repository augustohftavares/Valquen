<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'product';
	}

	function Modelar($products){

		if($products) {
			for($i = 0; $i < count($products); $i++) {
				$products[$i]['edit_url']= base_url('editar_utilizador'."/".$products[$i]['id']);
				$products[$i]['detail_url']= base_url('detalhes_utilizador'."/".$products[$i]['id']);
			}
			return $products;
		} else
			return false;
	}//end Modelar()
}
