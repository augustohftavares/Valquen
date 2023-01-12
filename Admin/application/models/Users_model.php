<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'users';
	}
	
	function Modelar($users){

		if($users) {
			for($i = 0; $i < count($users); $i++) {
				$users[$i]['edit_url']= base_url('edit_utilizador'."/".$users[$i]['id']);
				$users[$i]['del_url'] = base_url('delete_utilizador'."/".$users[$i]['id']);
			}
			return $users;
		} else
			return false;
	}


}//end class
