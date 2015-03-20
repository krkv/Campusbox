<?php

class Items extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('items_model');
	}

	public function index()
	{
        $data['database_items'] = $this->items_model->get_items();
        $this->load->view('header');
        $this->load->view('items/index', $data);
        $this->load->view('footer');
	}

    public function view($id)
	{
        $data['database_item'] = $this->items_model->get_item($id);

        if (empty($data['database_item']))
        {
            show_404();
        }

        $this->load->view('header');
        $this->load->view('items/view', $data);
        $this->load->view('footer');
	}

    public function add()
	{
        $this->load->helper('form');
	    $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title', 'item title', 'required');

        if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('header');
            $this->load->view('items/add');
            $this->load->view('footer');
	    }
	    else
	    {
		    $this->items_model->set_item();
		    $this->load->view('header');
            $this->load->view('items/success');
            $this->load->view('footer');
	    }
	}
}

?>