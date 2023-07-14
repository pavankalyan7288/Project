<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }
    
    public function index() {
        $data['users'] = $this->Users_model->get_all_users();
        $data['active_users'] = $this->Users_model->getActiveUsers();
        $this->load->view('dashboard', $data);
        $this->load->view('user_list', $data);
    }
    

    public function create() {
        $this->load->view('user_create');
    }
    public function save() {
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric|min_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user_create');
        } else {
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email_address' => $this->input->post('email_address'),
                'phone_number' => $this->input->post('phone_number'),
                'password' => $this->input->post('password'),
                'status' => $this->input->post('status'),
            );

            $user_id = $this->Users_model->create_user($data);

            if ($user_id) {
                $this->session->set_flashdata('success', 'User created successfully!');
                redirect('users');
            } else {
                $this->session->set_flashdata('error', 'Failed to create user.');
                redirect('users/create');
            }
        }
    }

    public function edit($user_id) {
        $data['user'] = $this->Users_model->get_user($user_id);
        
    
        if (!$data['user']) {
            show_404();
        } else {
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email_address', 'Email Address', 'required');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('user_edit', $data);
                $this->load->view('user_edit', array('user_id' => $user_id));

            } else {
                $update_data = array(
                    'full_name' => $this->input->post('full_name'),
                    'email_address' => $this->input->post('email_address'),
                    'phone_number' => $this->input->post('phone_number'),
                    'password' => $this->input->post('password'),
                    'status' => $this->input->post('status'),
                );
    
                $this->Users_model->update_user($user_id, $update_data);
    
                $this->session->set_flashdata('success', 'User updated successfully!');
                redirect('users');
            }
        }
    }
    
    public function delete($user_id) {
        $this->Users_model->delete_user($user_id);

        $this->session->set_flashdata('success', 'User deleted successfully!');
        redirect('users');
    }
}