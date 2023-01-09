<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos_model extends MY_Model {

	function __construct(){

		parent::__construct();
		$this->table = 'contatos';

	}//end constructor
	
	function Modelar($contatos){

		if($contatos) {

			//fazer iterator para percorrer e modelar
			for($i = 0; $i < count($contatos); $i++)
			{
				// necessario criar rotas para que funcione
				$contatos[$i]['edit_url']= base_url('edit'."/".$contatos[$i]['id']);
				$contatos[$i]['del_url'] = base_url('delete'."/".$contatos[$i]['id']);

			}//end for

			return $contatos;
		} else
			return false;
	}//end Modelar()

}//end class