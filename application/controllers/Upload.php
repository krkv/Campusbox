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
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('item/add');
            } elseif ($this->input->post('userfile') and $this->upload->do_upload() == FALSE) {
                $this->load->view('header');
                $this->load->view('item/add');
            } else {
                $new_id = $this->item_model->add_new_item();
                redirect('item/view/' . $new_id);
            }
        }
    }

}
?>

