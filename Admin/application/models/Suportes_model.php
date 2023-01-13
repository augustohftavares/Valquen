<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suportes_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'support';
	}
	
	function Modelar($suportes){

		if($suportes) {
			for($i = 0; $i < count($suportes); $i++) {
				$suportes[$i]['edit_url']= base_url('ver_suporte'."/".$suportes[$i]['id']);
			}
			return $suportes;
		} else
			return false;
	}


}//end class
