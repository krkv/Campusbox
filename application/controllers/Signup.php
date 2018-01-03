<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('item_model');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('/');
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('confirmation', 'password confirmation', 'trim|required|matches[password]');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header');
            $this->load->view('signup');
        } else {
            $new_user_id = $this->user_model->add_new_user();
            $new_user = $this->user_model->get_user($new_user_id);
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('user_id', $new_user->id);
            $this->session->set_userdata('user_email', $new_user->email);
            $this->session->set_userdata('user_name', $new_user->name);
            redirect('/');
        }
    }

}

?>
