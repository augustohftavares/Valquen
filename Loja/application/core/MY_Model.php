<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    // atributo que representa a tabela
    var $table = "";

    function __construct() {

        parent::__construct();

    }//end constructor()

    // return boolean e recebe um array
    public function Insert($data) {

        if(!isset($data)) 
            return false;

        // insert(table, data)
        return $this->db->insert($this->table, $data);

    }//end insert()

    //return array
    function GetById($id) {

        //verifica se é null, mas posso verificar se é de tipo inteiro ou "string";
        if(is_null($id))
            return false;

        // where(nomeCampoTabela, valor)
        $this->db->where('id', $id);
        //get() -> select
        $query = $this->db->get($this->table);
        
        if($query->num_rows() > 0)
            return $query->row_array();
        else 
            return null;
        
    }//end GetById()

    /*
        Lista todos os registos da tabela
        $sort Campo para ordenação dos registos
        $order Tipo de ordenação: ASC ou DESC
        retorna array
    */
    function GetAll($sort = 'id', $order = 'asc') {

        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0)
            return $query->result_array();
        else
            return null;

    }//end GetAll()

    /*
        Atualiza um registo na tabela
        $int ID do registo a ser atualizado
        $data Dados a serem inseridos
        retorna boolean
    */
    function Update($id, $data) {

        if(is_null($id) || !isset($data))
            return false;
        
        $this->db->where('id', $id);

        return $this->db->update($this->table, $data);
        
    }//end Update()

    /*
        Remove um registo na tabela
        $int ID do registo a ser eliminado
        retorna boolean
    */
    function Delete($id) {

        if(is_null($id)) 
            return false;

        $this->db->where('id', $id);

        return $this->db->delete($this->table);

    }//end Delete()

}//end class MY_Model

?>