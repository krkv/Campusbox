<?php
class Users_model extends CI_Model {

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

    public function login($email, $password)
    {
        $this -> db -> select('id, email, name, password');
        $this -> db -> from('user');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query -> result();
        }
        else
        {
            return FALSE;
        }
    }

}
?>