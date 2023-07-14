<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('vehicle_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['vehicles'] = $this->vehicle_model->get_all_vehicles();
        $data['active_vehicles'] = $this->vehicle_model->get_ActiveVehicles();
        $this->load->view('dashboard', $data);
        $this->load->view('vehicle_list', $data);
    }
    

    public function create() {
        $this->form_validation->set_rules('Vehiclename', 'Vehicle Name', 'required');
        $this->form_validation->set_rules('Vehiclecost', 'Vehicle Cost', 'required');
        $this->form_validation->set_rules('Phonenumber', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('Vehicleowner', 'Vehicle Owner', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vehicle_create');
        } else {
            $data = array(
                'Vehiclename' => $this->input->post('Vehiclename'),
                'Vehiclecost' => $this->input->post('Vehiclecost'),
                'Phonenumber' => $this->input->post('Phonenumber'),
                'Vehicleowner' => $this->input->post('Vehicleowner'),
                'status' => $this->input->post('status'),
            );

            $vehicle_id = $this->vehicle_model->create_vehicle($data);

            if ($vehicle_id) {
                $this->session->set_flashdata('success', 'Vehicle created successfully!');
                redirect('vehicles');
            } else {
                $this->session->set_flashdata('error', 'Failed to create vehicle.');
                redirect('vehicles/create');
            }
        }
    }
    
    public function edit($id) {
        $data['vehicle'] = $this->vehicle_model->get_vehicle($id);
    
        if (!$data['vehicle']) {
            show_404();
        }
    
        $this->form_validation->set_rules('Vehiclename', 'Vehicle Name', 'required');
        $this->form_validation->set_rules('Vehiclecost', 'Vehicle Cost', 'required');
        $this->form_validation->set_rules('Phonenumber', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('Vehicleowner', 'Vehicle Owner', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vehicle_edit', $data);
        } else {
            $update_data = array(
                'Vehiclename' => $this->input->post('Vehiclename'),
                'Vehiclecost' => $this->input->post('Vehiclecost'),
                'Phonenumber' => $this->input->post('Phonenumber'),
                'Vehicleowner' => $this->input->post('Vehicleowner'),
                'status' => $this->input->post('status'),
            );
    
            $this->vehicle_model->update_vehicle($id, $update_data);
    
            $this->session->set_flashdata('success', 'Vehicle updated successfully!');
            redirect('vehicles');
        }
    }

    public function delete($id) {
        $this->vehicle_model->delete_vehicle($id);

        $this->session->set_flashdata('success', 'Vehicle deleted successfully!');
        redirect('vehicles');
    }
}
