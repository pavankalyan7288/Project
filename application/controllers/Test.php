<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class Test extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Testmodel');
        $this->load->library('session');
        $this->session->set_userdata('city');
    }

    public function index(){
       $userdata =  $this->Testmodel->getData();
       $this->session->set_userdata('city');

       if ($this->session->userdata('city') == 'vizianagram '){
        echo 'Hii';
       }else{
        echo 'NO';
       }
       
    }

    public function hii(){
      
    }
}