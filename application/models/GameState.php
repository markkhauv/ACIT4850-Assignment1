<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GameState
 *
 * @author Victor
 */
class GameState extends CI_Model {

    //makes the variables for the gamestate
    protected $status;
    protected $code;
    protected $round;
    protected $countdown;

    function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    //grabs the gamestate information from the server
    function get_gameState() {
        $string = $this->curl->simple_get('http://ken-botcards.azurewebsites.net/status');

        $xml = simplexml_load_string($string);
            $this->code = (int) $xml->state;
            $this->round = (int) $xml->round;
            $this->countdown = (int) $xml->countdown;
            $this->status = 1;
    }

    //returns the game status
    public function get_status() {
        return $this->status;
    }

        //returns the game code
    public function get_code() {
        return $this->code;
    }
    //returns the round
    public function get_round() {
        return $this->round;
    }
    //returns the time left in the round
    public function get_countdown() {
        return $this->countdown;
    }
    //figures out what the state is based on the code
    public function get_state() {
        switch ($this->code) {
            case 0:
                $state = "closed";
                break;
            case 1:
                $state = "setup";
                break;
            case 2:
                $state = "ready";
                break;
            case 3:
                $state = "open";
                break;
            case 4:
                $state = "over";
                break;
            case 5:
                $state = "unknown";
                break;
        }
        return $state;
    }

}
