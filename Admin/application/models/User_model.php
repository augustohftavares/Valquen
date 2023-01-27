<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'user';
	}

	function Modelar($users){

		if($users) {
			for($i = 0; $i < count($users); $i++) {
				$users[$i]['edit_url']= base_url('editar_utilizador'."/".$users[$i]['id']);
				$users[$i]['detail_url']= base_url('detalhes_utilizador'."/".$users[$i]['id']);
			}
			return $users;
		} else
			return false;
	}//end Modelar()


}
