<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata('userdata')['logged_in'] != TRUE) {
            redirect('login');
        }

        $this->load->view('dashboard');
        $this->load->library('session');
    }
}
