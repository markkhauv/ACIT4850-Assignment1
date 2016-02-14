<?php

class Robots extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->_tableName = 'players';
        $this->_keyField = 'Player';
    }

    // returns players, peanut counts, and equity from the players and collections tables
    function get_players() {
        $query = $this->db->query('SELECT a.Player, a.Peanuts, COUNT(b.Piece) AS Equity FROM `players` a INNER JOIN `collections` b ON a.Player = b.Player GROUP BY a.Player ORDER BY a.Player ASC;');
        return $query->result();
    }

}

/* End of file Robots.php */
/* Location: application/models/Robots.php */   