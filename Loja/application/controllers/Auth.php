<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('auth_model');
	}//end constructor

	public function index() {
		$data['title'] = "Valquen - Loja Online";
		$this->load->view('index', $data);
	}//end index

	public function log() {
		$data['title'] = "Valquen - Iniciar Sessão";
		$this->load->view('Auth/login', $data);
	}

	public function reg() {
		$data['title'] = "Valquen - Registo";
		$this->load->view('Auth/register', $data);
	}


 /**	Login System
	 *	@param none
	 *	@return NULL
  **/
	public function register() {

		$password = $this->input->post('password');
		$confirm_password = $this->input->post('password_confirm');

		$data = array(
			"title" => $this->input->post('title'),
			"name" => $this->input->post('name'),
			"surname" => $this->input->post('surname'),
			"email" => $this->input->post('email'),
			"birthday" => $this->input->post('birthday'),
			"password" => $this->input->post('password'),
			"password_confirm" => $password
		);

		$this->form_validation->set_rules('name', 'Nome', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('surname', 'surname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirmar Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === false) {
			$data['title'] = 'Valquen - Registo';
			$this->session->set_flashdata('form_error', '<p class="form_error"><i class="bx bx-right-arrow-alt bx-fade-left" ></i>Preencha todos os campos obrigatórios</p>');
			$this->load->view("Auth/register", $data);
		} else {
			$data = array(
				"title" => $this->input->post('title'),
				"name" => $this->input->post('name'),
				"surname" => $this->input->post('surname'),
				"email" => $this->input->post('email'),
				"birthday" => $this->input->post('birthday'),
				"password" => password_hash($password, PASSWORD_DEFAULT)
			);
			$this->auth_model->Insert($data);
			$this->session->set_flashdata('success', 'Agora inicia sessão');
			$data['title'] = 'Valquen - Iniciar Sessão';
			$this->load->view("Auth/login", $data);
		}
	}// register

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
			 $user = $this->db->get_where('user', ['email' => $email])->row();

			 $userdata = array(
				 'name' => $user->name,
				 'surname' => $user->surname,
				 'email' => $user->email,
				 'bithday' => $user->birthday,
				 'phone' => $user->phone,
				 'logged_in' => (bool)true
				);
			 $this->session->set_userdata('userdata', $userdata);

			 if(!$user) {
				 $this->session->set_flashdata('login_error', '<p style="color: red; margin-left: 20px;">Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 if(!password_verify($password, $user->password)){
				 $this->session->set_flashdata('login_error', '<p style="color: red; margin-left: 20px;">Por favor verifique o seu email e password e tente novamente.</p>');
				 redirect(uri_string());
			 }

			 redirect(base_url(""), 'refresh');

		 }

	 }//end login

	 /**	Logout System
  	 *	@param none
  	 *	@return NULL
    **/
		public function logout() {

			$this->load->library('session');
			$this->session->unset_userdata('userdata');
			redirect(base_url(""));

		}//end logout

}//end class StartPage
?>
