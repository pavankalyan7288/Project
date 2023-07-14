<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('user_details');

        if ($query->num_rows() > 0) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }

    public function get_user($username) {
        $query = $this->db->get_where('user_details', array('username' => $username));

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
}
