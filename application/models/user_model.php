<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
 */

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 
     * get 1 or many users
     *  
     * return an array
     * 
     */
    public function get($user_id = null) {
        if ($user_id == null) {
            $query = $this->db->get('user');
            //fetch all
        } else {
            //fetch one
            $query = $this->db->get_where('user', ['user_id' => $user_id]);
        }
        return $query->result();
    }

    /*Attempts to validate and log a user in
     * string $type admin or user
     */
    public function login($type, $username, $password) {
       
        
        
        $query = $this->db->get_where('user', [
            'type' => $type,
            'username' => $username,
                'password' =>($password)
        ]);
        return $query->result();
        
    }

    public function create($username, $password) {

        //make sure the username not taken
 $this->db->where('username', $username);
 $duplicate = $this->db->count_all_results('user');
 if ($duplicate >0){
     return false;
 }
        //create the record

        $result = $this->db->insert('user', [
            'username' => $username,
            'password' => $password
                ]);
        
        return $result;
    }

    public function delete($user_id) {
        $this->db->where(['user_id' => $user_id]);
        $result = $this->db->delete('user');
        return $result;
    }

}
