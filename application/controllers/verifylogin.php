<?php

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    function index()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

    if($this->form_validation->run() == FALSE)
    {
        $this->load->view('header');
        $this->load->view('users/login');
        $this->load->view('footer');
    }
    else
    {
        redirect('items');
    }

    }

    function check_database($password)
    {
        $email = $this->input->post('email');
        
        $result = $this->users_model->login($email, $password);

        if($result)
        {
            foreach($result as $row)
            {
                $this->session->set_userdata('user_id', $row->id);
                $this->session->set_userdata('user_email', $row->email);
                $this->session->set_userdata('user_name', $row->name);
            }
        return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>