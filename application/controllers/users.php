<?php

class Users extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
        $this->load->model('items_model');
	}

    public function view($id)
	{
        if (!$this->session->userdata('user_id'))
        {
            redirect('users/add');
        }

        $data['user_record'] = $this->users_model->get_user($id);

        if (empty($data['user_record']))
        {
            show_404();
        }

        $data['user_items'] = $this->items_model->get_user_items($id);

        $this->load->view('header');
        $this->load->view('users/view', $data);
        $this->load->view('footer');
	}

    public function add()
	{
        $this->load->helper('form');
	    $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|md5');
        $this->form_validation->set_rules('password2', 'password confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('header');
            $this->load->view('users/add');
            $this->load->view('footer');
	    }
	    else
	    {
		    $this->users_model->set_user();
		    $this->load->view('header');
            $this->load->view('users/success');
            $this->load->view('footer');
	    }
	}

    public function login()
    {
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('users/login');
        $this->load->view('footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email');
        $this->session->unset_userdata('user_name');
        session_destroy();
        redirect('items');
    }

}
?>