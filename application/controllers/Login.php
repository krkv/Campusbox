<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('item_model');

    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url(index_page()));
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_password');
        if ($this->form_validation->run() == FALSE) {
            $data['number']=$this->item_model->get_all_items_count();
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer', $data);
        } else {
            if ($this->session->userdata('request')) {
                $request = $this->session->userdata('request');
                $this->session->unset_userdata('request');
                redirect($request);
            } else {
                redirect(base_url(index_page()));
            }
        }
    }

    function check_password($password) {
        $email = $this->input->post('email');
        $result = $this->user_model->login_result($email, $password);
        if ($result) {
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('user_id', $result->id);
            $this->session->set_userdata('user_email', $result->email);
            $this->session->set_userdata('user_name', $result->name);
            return TRUE;
        } else {
            $this->form_validation->set_message('check_password', 'Invalid username or password.');
            return FALSE;
        }
    }

}

?>