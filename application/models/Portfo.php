<?php


class Portfo extends MY_Model {
    
    
    function __construct()
    {
        parent::__construct();
        $this->_tableName = 'transactions';
        $this->_keyField = 'Player';
    }
    
    
    function get_portfolio()
    {
        $name=$_GET['name'];
        $query = $this->db->query('SELECT Player, Trans FROM Transactions WHERE Player="' . $name . '"');          
        return $query->result();
    }
    
    function get_players()
    {
        $query = $this->db->query('SELECT Player FROM players');          
        return $query->result();
    }
}