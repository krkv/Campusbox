<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('confirm', 'password confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('campus_key', 'campus key', 'trim|required|callback_check_key');

        if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header');
            $this->load->view('signup');
            $this->load->view('templates/footer');
	    }
	    else
	    {
		    $this->user_model->add_user();
		    redirect('/');
	    }

    }

    public function check_key($key)
    {
        if ($key == "application")
        {
            return TRUE;
        }

        $this->form_validation->set_message('check_key', 'Invalid campus key.');
        return FALSE;
    }

}
?>