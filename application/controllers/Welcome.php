<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('subscriber_model');
    }

    public function subscribe() {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[subscriber.email]');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header');
            $this->load->view('welcome');
            $this->load->view('footer');
        } else {
            $this->subscriber_model->add_subscriber();
            redirect('/');
        }
    }

}
