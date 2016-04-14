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

    //put your code here
    protected $status;
    protected $code;
    protected $round;
    protected $countdown;

    function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    function get_gameState() {
        $string = $this->curl->simple_get('http://botcards.jlparry.com/status');

        $xml = simplexml_load_string($string);
            $this->code = (int) $xml->state;
            $this->round = (int) $xml->round;
            $this->countdown = (int) $xml->countdown;
            $this->status = 1;
    }

    public function get_status() {
        return $this->status;
    }

    public function get_code() {
        return $this->code;
    }

    public function get_round() {
        return $this->round;
    }

    public function get_countdown() {
        return $this->countdown;
    }

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
