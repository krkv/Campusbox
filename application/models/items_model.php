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

    public function get_item($id)
    {
		$query = $this->db->get_where('item', array('id' => $id));
		return $query->row_array();
    }

    public function set_item()
    {
	    $data = array(
            'id' => $this->input->post('id'),
		    'title' => $this->input->post('title'),
		    'description' => $this->input->post('description')
	    );

        // Insert $data to table 'item'
	    return $this->db->insert('item', $data);
    }

}
?>