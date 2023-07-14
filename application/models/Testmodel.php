<?php

Class Testmodel extends CI_Model{

    public function getData(){
        $this->db->select('*');
        $this->db->from('user_details');
        // $this->db->where();
       $query =  $this->db->get();
    //    echo $this->db->last_query(); exit();
    if($query->num_rows() > 0){
        return $query->row_array();
    }
    //row array 
    //result_array
    }
}