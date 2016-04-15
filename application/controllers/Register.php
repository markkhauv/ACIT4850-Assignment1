<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        
    }
    
    
         public function index()
    {
              
  $this->load->view('/register');
      
    }
    


    public function create_user()
    {
   $username =  $this->input->post('username');
    $password=  $this->input->post('password');
    
    //make sure the username not taken
    $this->db->get('user', ['username' =>$username]);
        $this->load->model('user_model');
     $this->user_model->create($username, $password);
     echo 'Registration was successful';
     
     echo '<br> <a href="/login">Please click here to login</a>';
    }
    
}