<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber_model extends CI_Model {

    public function add_subscriber() {
        $data = array(
            'email' => $this->input->post('email'),
        );
        return $this->db->insert('subscriber', $data);
    }

}

?>