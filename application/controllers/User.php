<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('user_model');
        $this->load->model('item_model');
    }

    public function view($id) {
        if (!$this->session->userdata('logged_in')) {
            $request = uri_string();
            $this->session->set_userdata('request', $request);
            redirect('login');
        }
        $data['selected_user'] = $this->user_model->get_user($id);
        if (empty($data['selected_user'])) {
            show_404();
        }
        $data['item_list'] = $this->item_model->get_user_items($id);
        $data['item_count'] = $this->item_model->count_user_items($id);
        $data['number']=$this->item_model->get_all_items_count();
        $this->load->view('header');
        $this->load->view('profile', $data);
        $this->load->view('item/list', $data);
        $this->load->view('footer', $data);
    }
    
    public function delete($user_id) {
        if ($this->session->userdata('user_id') == $user_id) {
            $this->user_model->delete_user($user_id);
            redirect('/logout');
        }
        else {
            show_error('You are not allowed to do that!', 403, $heading = 'Forbidden');
        }
        
    }

}
