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
        $data['items'] = $this->items_model->get_items();
		$this->load->view('templates/header');
        $this->load->view('item/index', $data);
        $this->load->view('templates/footer');
	}

}
