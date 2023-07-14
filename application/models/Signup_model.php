<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_Model {

    public function register($data) {
        $this->db->insert('user_details', $data);
    }
}
