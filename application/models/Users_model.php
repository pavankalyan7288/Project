<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function create_user($data) {
        $this->db->insert('users_details', $data);
        return $this->db->insert_id();
    }
    

    public function get_user($user_id) {
        return $this->db->get_where('users_details', array('user_id' => $user_id))->row();
    }

    public function update_user($user_id, $data) {
        $this->db->where('user_id', $user_id);
        $this->db->update('users_details', $data);
        
    }

    public function delete_user($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->delete('users_details');
    }

    public function get_all_users() {
        return $this->db->get('users_details')->result();
    }
    public function getActiveUsers() {
    $this->db->where('status', 'active');
    $query = $this->db->get('users_details');
    return $query->result();
}

}
