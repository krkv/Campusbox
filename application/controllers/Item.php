<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('text');
        $this->load->library('form_validation');
        $this->load->model('item_model');
    }

    public function index() {
        $data['item_list'] = $this->item_model->get_all_items();
        $this->load->view('header');
        if (!$this->session->userdata('logged_in')) {
            $this->load->view('welcome');
        }
        $this->load->view('menu');
        $this->load->view('item/list', $data);
        $this->load->view('footer');
    }

    public function view($id) {
        $data['selected_item'] = $this->item_model->get_one_item($id);
        if (empty($data['selected_item'])) {
            show_404();
        }
        $this->load->view('header');
        $this->load->view('item/view', $data);
        $this->load->view('footer');
    }

    public function table() {
        $data['item_table'] = $this->item_model->get_join();
        $this->load->view('header');
        $this->load->view('item/table', $data);
        $this->load->view('footer');
    }

    public function add() {
        if (!$this->session->userdata('logged_in')) {
            $request = uri_string();
            $this->session->set_userdata('request', $request);
            redirect('login');
        }
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header');
            $this->load->view('item/add');
            $this->load->view('footer');
        } else {
            $this->item_model->add_new_item();
            redirect('/');
        }
    }

    public function search($user_query = FALSE) {

        if ($this->input->post('search')) {
            $user_query = $this->input->post('search');
            redirect('item/search/' . $user_query);
        } 

        if ($user_query) {
            $data['item_list'] = $this->item_model->get_matching($user_query);
        } else {
            $data['item_list'] = FALSE;
        }

        $data['user_query'] = $user_query;
        
        $this->load->view('header');
        $this->load->view('search', $data);
        $this->load->view('item/list', $data);
        $this->load->view('footer');
    }

}
