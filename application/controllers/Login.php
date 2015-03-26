<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

    public function index()
    {
        $this->load->helper('form');
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

    function verify()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('login');
            $this->load->view('templates/footer');
        }

        else
        {
            redirect('/');
        }
    }

    function check_database($password)
    {
        $email = $this->input->post('email');        
        $result = $this->user_model->login_result($email, $password);

        if($result)
        {
            $this->session->set_userdata('user_id', $result->id);
            $this->session->set_userdata('user_email', $result->email);
            $this->session->set_userdata('user_name', $result->name);
            return TRUE;
        }

        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password!');
            return FALSE;
        }
    }

}
?>