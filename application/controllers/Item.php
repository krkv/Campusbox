<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model');
	}

	public function index()
	{
		$this->load->view('templates/header');
        
        if ($this->session->userdata('user_id'))
        {
            $data['item_list'] = $this->item_model->get_all_items();
            $this->load->view('item/index', $data);    
        }
        
        else
        {
            $data['item_list'] = $this->item_model->get_top_items();
            $this->load->view('templates/welcome');
            $this->load->view('item/index', $data);
        }
        
        $this->load->view('templates/footer');
	}

    public function view($id)
	{
        $data['selected_item'] = $this->item_model->get_one_item($id);

        if ( ! $this->session->userdata('user_id'))
        {
            $available_items = $this->item_model->get_top_items();
            
            if ( ! in_array($data['selected_item'], $available_items))
            {
                redirect('signup');
            }
        }

        if (empty($data['selected_item']))
        {
            show_404();
        }

		$this->load->view('templates/header');
        $this->load->view('item/view', $data);
        $this->load->view('templates/footer');
	}


    public function table()
	{

        if ( ! $this->session->userdata('user_id'))
        {
            redirect('signup');
        }

		$this->load->view('templates/header');
        
        $data['item_table'] = $this->item_model->get_join();
        $this->load->view('item/table', $data);
        
        $this->load->view('templates/footer');

	}

}
