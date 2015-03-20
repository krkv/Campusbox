<?php

class Users extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

    public function index()
	{
        echo "poo";
    }

    public function view($id)
	{
        $data['user_record'] = $this->users_model->get_user($id);

        if (empty($data['user_record']))
        {
            show_404();
        }

        $this->load->view('header');
        $this->load->view('users/view', $data);
        $this->load->view('footer');
	}

    public function add()
	{
        $this->load->helper('form');
	    $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

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
}

?>