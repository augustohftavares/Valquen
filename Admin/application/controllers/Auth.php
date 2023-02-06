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
			 $this->session->set_flashdata('login_error', '<p class="alertLogin"><i class="bx bx-chevron-right bx-fade-left"></i> Por favor verifique o seu email e password e tente novamente.</p>');
			 $this->load->view('Auth/login', $data);

		 } else {

			 $email = $this->input->post('email');
			 $password = $this->input->post('password');
			 $admin = $this->db->get_where('admin', ['email' => $email])->row();

			 $userdata = array(
				 'username' => $admin->username,
				 'email' => $admin->email,
				 'logged_in' => (bool)true
				);
			 $this->session->set_userdata('userdata', $userdata);

			 if(!$admin) {
				 $this->session->set_flashdata('login_error', '<p class="alertLogin"><i class="bx bx-chevron-right bx-fade-left"></i> Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 if(!password_verify($password, $admin->password)){
				 $this->session->set_flashdata('login_error', '<p class="alertLogin"><i class="bx bx-chevron-right bx-fade-left"></i> Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 redirect(base_url("dashboard"), 'refresh');

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
