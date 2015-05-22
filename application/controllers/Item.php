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
        $data['number'] = $this->item_model->get_all_items_count();
        $this->load->view('header');
        if (!$this->session->userdata('logged_in')) {
            $this->load->view('welcome');
        }
        $this->load->view('menu');
        $this->load->view('item/list', $data);
        $this->load->view('footer', $data);
    }

    public function view($id) {
        $data['selected_item'] = $this->item_model->get_one_item($id);
        $data['number'] = $this->item_model->get_all_items_count();
        if (empty($data['selected_item'])) {
            show_404();
        }
        $this->load->view('header');
        $this->load->view('item/view', $data);
        $this->load->view('footer', $data);
    }

    public function table() {
        $data['item_table'] = $this->item_model->get_join();
        $data['number'] = $this->item_model->get_all_items_count();
        $this->load->view('header');
        $this->load->view('item/table', $data);
        $this->load->view('footer', $data);
    }

    public function add() {
        if (!$this->session->userdata('logged_in')) {
            $request = uri_string();
            $this->session->set_userdata('request', $request);
            redirect('login');
        } else {
            $this->load->view('header');
            $this->load->view('item/add');
        }
    }

    public function edit($item_id) {
        $selected_item = $this->item_model->get_one_item($item_id);
        if ($this->session->userdata('user_id') == $selected_item->userid) {
            $data['number'] = $this->item_model->get_all_items_count();
            $data['selected_item'] = $selected_item;
            $this->load->view('header');
            $this->load->view('item/edit', $data);
            $this->load->view('footer', $data);
        } else {
            show_error('You are not allowed to do that!', 403, $heading = 'Forbidden');
        }
    }

    public function do_edit() {
        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $item_id = $this->input->post('id');
        $selected_item = $this->item_model->get_one_item($item_id);
        if ($this->form_validation->run() === FALSE) {
            $data['number'] = $this->item_model->get_all_items_count();
            $data['selected_item'] = $selected_item;
            $this->load->view('header');
            $this->load->view('item/edit', $data);
            $this->load->view('footer', $data);
        } else {
            $this->item_model->edit_item($item_id);
            redirect('/item/view/' . $item_id);
        }
    }

    public function delete($item_id) {
        $selected_item = $this->item_model->get_one_item($item_id);
        if ($this->session->userdata('user_id') == $selected_item->userid) {
            $this->item_model->delete_item($item_id);
            redirect('/');
        } else {
            show_error('You are not allowed to do that!', 403, $heading = 'Forbidden');
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
        $data['number'] = $this->item_model->get_all_items_count();

        $this->load->view('header');
        $this->load->view('search', $data);
        $this->load->view('item/list', $data);
        $this->load->view('footer', $data);
    }

    public function json() {
        $result = $this->item_model->get_all_items_count();
        echo json_encode($result);
    }

}
