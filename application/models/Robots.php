<?php


class Robots extends MY_Model {
    
    
    function __construct()
    {
        parent::__construct();
        $this->_tableName = 'players';
        $this->_keyField = 'Player';
    }
    
    
    function get_players()
    {
        $query = $this->db->query('SELECT Player, Peanuts FROM players');          
        return $query->result();
    }
        
    
}