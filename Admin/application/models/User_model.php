<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->table = 'user';
	}

}
