<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function authenticate() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            if($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        

            $user = $this->Login_model->get_user($username);
            
            if (!empty($user)) {
                $userdata = array(
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata('userdata', $userdata);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('login');
            }
            }
        }
    }

        public function logout() {
        $this->session->sess_destroy();
        redirect('login');
        }
}
