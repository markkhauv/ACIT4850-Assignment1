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
    function login() {

        $username = array(
            'username' => $_POST["name"]
        );
        $this->session->set_userdata($username);
        $this->data['username'] = $this->session->userdata('username');
        $this->index();
    }

    function logout() {

        $username = array(
            'username' => 'No one logged in'
        );
        $this->session->set_userdata($username);
        $this->data['username'] = $this->session->userdata('username');
        $this->index();
    }

}

/* End of file Homepage.php */
/* Location: application/controllers/Homepage.php */