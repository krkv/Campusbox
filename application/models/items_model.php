<?php
class Items_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
    
    public function get_items()
    {
		$query = $this->db->get('item');
		return $query->result_array();
    }

    public function set_item()
    {
	    $data = array(
		    'title' => $this->input->post('title'),
		    'description' => $this->input->post('description')
	    );

        // Insert $data to table 'item'
	    return $this->db->insert('item', $data);
    }

}
?>