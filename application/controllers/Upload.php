<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('item_model');
    }

    public function do_upload() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[100]');
            $this->form_validation->set_rules('description', 'Description', 'trim|max_length[255]');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('item/add');
            } else {
                $this->upload->do_upload();
                $new_id = $this->item_model->add_new_item();
                redirect('item/view/' . $new_id);
            }
        }
    }

}
?>

