<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

    public function create_vehicle($data) {
        $this->db->insert('vechiles-details', $data);
        return $this->db->insert_id();
    }

    public function get_vehicle($id) {
        return $this->db->get_where('vechiles-details', array('id' => $id))->row();
    }

    public function update_vehicle($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('vechiles-details', $data);
    }

    public function delete_vehicle($id) {
        $this->db->where('id', $id);
        $this->db->delete('vechiles-details');
    }

    public function get_all_vehicles() {
        return $this->db->get('vechiles-details')->result();
    }

    public function get_ActiveVehicles() {
        $this->db->where('status', 'active');
        $query = $this->db->get('vechiles-details');
        return $query->result();
    }
}
