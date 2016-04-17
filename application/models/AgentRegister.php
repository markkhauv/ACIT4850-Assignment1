<?php

class AgentRegister extends CI_Model {

    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->model('GameState');
        $this->load->library('curl');
    }

    public function agent_register($team, $name, $password) {

        $string = $this->curl->simple_post('http://ken-botcards.azurewebsites.net/register', array('team' => $team, 'name' => $name, 'password' => $password));
        $xml = @simplexml_load_string($string);
        $token = (string) $xml->token;

        return TRUE;
    }

}

/* End of file AgentRegister.php */
/* Location: application/controllers/AgentRegister.php */