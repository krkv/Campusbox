<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user($id)
    {
		$query = $this->db->get_where('user', array('id' => $id));
		return $query->row();
    }

    public function add_new_user()
    {
	    $data = array(
		    'name' => $this->input->post('name'),
		    'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
	    );

	    $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    public function login_result($email, $password)
    {
        $this->db->select('id, email, name, password');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            $result = $query->row();

            if (password_verify($password, $result->password))
            {
                return $result;   
            }
        }
        
        return FALSE;
    }
    
    public function delete_user($user_id) {
        $this->db->where(id, $user_id);
        return $this->db->delete('user');
    }

}
?>