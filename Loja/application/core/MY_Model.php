<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    // attribute that represents the sql table
    var $table = "";

    function __construct() {

        parent::__construct();

    }//end constructor()

    /**
     * @param array $data
     * @return BOOLEAN
     **/
    public function Insert($data) {

        if(!isset($data))
            return false;

        return $this->db->insert($this->table, $data);

    }//end insert()

    /**
     * @param int $id
     * @return array
     **/
    function GetById($id) {

        if(is_null($id))
            return false;

        $this->db->where('id', $id);
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0)
            return $query->row_array();
        else
            return null;

    }//end GetById()

    /**
     *  @param string $sort - Field to sort records
     *  @param string $order - Sort type: ASC or DESC
     *  @return array
     **/
    function GetAll($sort = 'id', $order = 'asc') {

        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0)
            return $query->result_array();
        else
            return null;

    }//end GetAll()

    /** Updates a record in the table
     *  @param int $id - ID of the record to be updated
     *  @param $data - Data to be entered
     *  @return boolean
     **/
    function Update($id, $data) {

        if(is_null($id) || !isset($data))
            return false;

        $this->db->where('id', $id);

        return $this->db->update($this->table, $data);

    }//end Update()

    /** Delete a record in the table
     *  @param int $id - ID of the record to be deleted
     *  @return boolean
     **/
    function Delete($id) {

        if(is_null($id))
            return false;

        $this->db->where('id', $id);

        return $this->db->delete($this->table);

    }//end Delete()

}//end class MY_Model

?>
