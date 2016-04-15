<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        // shows playerlist, status, content, and login username
        $this->data['playerlist'] = $this->players();
        $this->data['status'] = $this->status();
        $this->data['content'] = $this->parser->parse('homepage', $this->data, true);
        $this->data['username'] = $this->session->userdata('username');
        $this->render();
    }

    // requests players data from Robots model
    private function players() {
        $this->load->model('Robots');

        $rows = array();
        foreach ($this->Robots->get_players() as $record) {
            $rows[] = (array) $record;
        }
        $this->data['players'] = $rows;

        return $this->parser->parse('playerlist', $this->data, true);
    }

    // requests status data from Status model
    private function status() {
        $this->load->model('Status');

        $rows = array();
        foreach ($this->Status->get_status() as $record) {
            $rows[] = (array) $record;
        }
        $this->data['collections'] = $rows;

        return $this->parser->parse('status', $this->data, true);
    }

    // session data for login and logout
    function login($submit=null) {
if ($submit ==null){
       $this->load->view('/inc/header');
        $this->load->view('login');
         $this->load->view('/inc/footer');
         return true;
    }
$username = $this->input->post('username');
$password = $this->input->post('password');

$this->load->model('user_model');
$result = $this->user_model->login('user', $username, $password);
if ($result== true){
    
   $this->session->set_userdata('user_id', 1);
    
   redirect('/', 'refresh');
   
   
}else{
    redirect ('/login', 'refresh');
}
    
   
}

    
public function logout()
{
    $this->session->sess_destroy();
    redirect ('/login', 'refresh');
}


    
    }
    

/* End of file Homepage.php */
/* Location: application/controllers/Homepage.php */