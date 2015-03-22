<?php
class Items_model extends CI_Model {
    
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

    public function get_user_items($userid)
    {
		$query = $this->db->get_where('item', array('userid' => $userid));
		return $query->result_array();
    }

    public function set_item()
    {
	    $data = array(
            'userid' => $this->session->userdata('user_id'),
		    'title' => $this->input->post('title'),
		    'description' => $this->input->post('description')
	    );

        // Insert $data to table 'item'
	    return $this->db->insert('item', $data);
    }

}
?>