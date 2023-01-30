<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
    $this->load->model('auth_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Iniciar Sessão";
		$this->load->view('Auth/login', $data);
	}//end index()

  /**
  ** Login System
  **
  ** @param none
  ** @return NULL
  **/
  public function login(){

    $inputs = array(
      "email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
    );

    $query = $this->db->get_where('admin');
    $admin_row = $query->row();

    if(password_verify($inputs["password"], $admin_row->password)) {

      $inputs["password"] = $admin_row->password;
      $this->db->where('email', $inputs["email"]);
			$this->db->where('password', $inputs["password"]);

      $query = $this->db->get('admin');
      $find_admin = $query->num_rows($query);

      if($find_admin > 0){
				date_default_timezone_set('Europe/Lisbon');
				$updateData = [
   				'lastLogin' => date('Y-m-d H:i:s')
				];

				$this->db->where('email', $inputs["email"]);
				$this->db->update('user', $updateData);

				$_SESSION['logged_in'] = (bool)TRUE;
				$_SESSION['username'] = $admin_row->username;
				$_SESSION['admin_id'] = $admin_row->id;
        $this->session->set_flashdata('login_success', '');
        redirect(base_url("dashboard"), 'refresh');

      } else {

        $this->session->set_flashdata('login_error', 'Houve um problema interno, contate um programador');
        redirect(base_url("iniciar_sessao"), 'refresh');

      }

    } else {
      $this->session->set_flashdata('form_error', 'O campo email ou o campo password estão errados ou vazios');
      redirect(base_url("iniciar_sessao"), 'refresh');
    }

  }//end login


	/**
  ** Logout System
  **
  ** @param none
  ** @return NULL
  **/
	public function logout() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			//foreach ($_SESSION as $key => $value) {
				//unset($_SESSION[$key]);
			//}
			unset($_SESSION['logged_in']);
			unset($_SESSION['username']);
			$_SESSION['logged_in'] = (bool)false;
			redirect(base_url("iniciar_sessao"), 'refresh');
		} else
			redirect('/', 'refresh');

	}//end logout

}//end class

?>
