<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function get_all_items() {
        $query = $this->db->get('item');
        return $query->result();
    }

    public function get_all_items_count(){
        return $this->db->count_all_results('item');
    }
    
    public function get_top_items() {
        $query = $this->db->get('item', 4);
        return $query->result();
    }
    
    public function get_user_items($userid) {
        $query = $this->db->get_where('item', array('userid' => $userid));
        return $query->result();
    }
    
    public function count_user_items($userid) {
        $this->db->select('*');
        $this->db->from('item');
        $this->db->where('userid', $userid);
        return $this->db->count_all_results();
    }

    public function get_one_item($id) {
        $query = $this->db->get_where('item', array('id' => $id));
        return $query->row();
    }

    public function get_join() {
        $this->db->select('item.id, item.title, user.name, user.id as user_id');
        $this->db->from('item');
        $this->db->join('user', 'user.id = item.userid');
        $query = $this->db->get();
        return $query->result();
    }


    public function add_new_item() {
        $data = array(
            'userid' => $this->session->userdata('user_id'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        );
        $this->db->set('timestamp', 'NOW()', FALSE);
        return $this->db->insert('item', $data);
    }
    
    public function get_matching($user_query) {
        $this->db->select('*');
        $this->db->from('item');
        $this->db->like('title', $user_query);
        $this->db->or_like('description', $user_query);
        $query = $this->db->get();
        return $query->result();
    }

}
