<?php

class Register extends CI_Model {

    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->data['pagebody'] = 'Admin'; // this is the view we want shown
        $this->render();
    }

    function register_agent() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->user->checkUser($username);
        if ($result[0] != null) {
            
        } else {
            $data = array(
                'player' => $username,
                'Peanuts' => '100',
                'Password' => $password,
                'Role' => 'user',
                'Avatar' => '',
            );
            $this->user->insertUser($data);
        }
        redirect('/', 'refresh');
//        if($result[0] == null){
//            redirect('/', 'refresh');
//        }else{
//            $this->session->set_userdata('username', $result[0]->player);
//            $this->data['username'] = $result[0]->player;
//            redirect('/', 'refresh');
//        }
    }

}

/* End of file Register.php */
/* Location: application/controllers/Register.php */
