<?php

class Items extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('items_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['items'] = $this->items_model->get_items();
        $this->load->view('header');
        $this->load->view('navigation');
        $this->load->view('items/index', $data);
        $this->load->view('footer');
	}

    public function add()
	{
        $this->load->helper('form');
	    $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('header');
            $this->load->view('navigation');
            $this->load->view('items/add');
            $this->load->view('footer');
	    }
	    else
	    {
		    $this->items_model->set_item();
		    $this->load->view('header');
            $this->load->view('navigation');
            $this->load->view('items/success');
            $this->load->view('footer');
	    }
	}
}

/* End of file items.php */
/* Location: ./application/controllers/items.php */

?>