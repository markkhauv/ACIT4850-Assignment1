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
        $query = $this->db->query('SELECT a.Player, a.Peanuts, COUNT(b.Piece) AS Equity FROM `players` a INNER JOIN `collections` b ON a.Player = b.Player GROUP BY a.Player ORDER BY a.Player ASC;');          
        return $query->result();
    }
        
    
}