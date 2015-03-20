<?php
class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

    public function get_user($id)
    {
		$query = $this->db->get_where('user', array('id' => $id));
		return $query->row_array();
    }

    public function set_user()
    {
	    $data = array(
		    'name' => $this->input->post('name'),
		    'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
	    );

	    return $this->db->insert('user', $data);
    }

}
?>