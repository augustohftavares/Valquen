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

	public function index_() {
		$data['title'] = "Valquen - Criar Conta para administrador";
		$this->load->view('Auth/register', $data);
	}//end index()


	/**
  ** Login System
  **
  ** @param none
  ** @return NULL
  **/
	public function register() {

		$password = $this->input->post('password');
		$confirm_password = $this->input->post('password_confirm');

		$data = array(
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"password_confirm" => $password
		);

		$this->form_validation->set_rules('username', 'Nome do utilizador', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirmar Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {
			$data['title'] = 'Valquen - Criar Conta para administrador';
			$this->load->view("Auth/register", $data);
		} else {
			$data = array(
				"username" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"password" => password_hash($password, PASSWORD_DEFAULT)
			);
			$this->auth_model->Insert($data);
			$this->session->set_flashdata('success', '<script>registerAdminSuc();</script>');
			$data['title'] = 'Valquen - Iniciar Sessão';
			$this->load->view("Dashboard/index", $data);
		}

	}//end register

	/**	Login System
 	 *	@param none
 	 *	@return NULL
   **/

	 public function login() {

		 $this->load->library('session');

		 $this->form_validation->set_rules('email', 'Endereço de e-mail', 'required');
		 $this->form_validation->set_rules('password', 'Palavra-passe', 'required');

		 if($this->form_validation->run() == FALSE) {

			 $data['title'] = "Valquen - Iniciar Sessão";
			 $this->load->view('Auth/login', $data);

		 } else {

			 $email = $this->input->post('email');
			 $password = $this->input->post('password');
			 $admin = $this->db->get_where('admin', ['email' => $email])->row();

			 $admindata = array(
				 'id' => $admin->id,
				 'username' => $admin->username,
				 'email' => $admin->email,
				 'createdAt' => $admin->createdAt,
				 'logged_in' => (bool)true
				);
			 $this->session->set_userdata('userinfo', $admindata);

			 if(!$admin) {
				 $this->session->set_flashdata('login_error', '<p style="color: red; margin-left: 20px;">Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 if(!password_verify($password, $admin->password)){
				 $this->session->set_flashdata('login_error', '<p style="color: red; margin-left: 20px;">Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 redirect(base_url("Dashboard"), 'refresh');

		 }

	 }//end login


	/**
  ** Logout System
  **
  ** @param none
  ** @return NULL
  **/
	public function logout() {

		$this->load->library('session');
		$this->session->unset_userdata('userdata');
		$this->session->userdata['userinfo']['logged_in'] = false;
		$this->session->userdata['userinfo']['username'] = "";
		$this->session->userdata['userinfo']['email'] = "";
		$this->session->userdata['userinfo']['createdAt'] = "";
		redirect(base_url(""));

	}//end logout

}//end class

?>
