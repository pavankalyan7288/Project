<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('signup_model');
    }

    public function index() {
        $this->load->view('signup');
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
            $data['baseurl'] = base_url();
            $this->load->view('signup', $data);

        } else {
            if($this->input->post('save')) {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
               

                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => $password
                );

                $signupData = $this->signup_model->register($data);
                if ($signupData !== '') {
                    echo "Successfully created";
                } else {
                    echo "Error";
                }
                

            }


        }
    }
}
