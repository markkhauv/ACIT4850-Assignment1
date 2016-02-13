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
        $query = $this->db->query('SELECT DateTime, Trans, Series FROM Transactions WHERE Player="' . $name . '"');          
        return $query->result();
    }
    
    function get_players()
    {
        $query = $this->db->query('SELECT Player FROM players');          
        return $query->result();
    }
    
    function get_headA()
    {
        $name=$_GET['name'];
        $query = $this->db->query('SELECT SUM(Piece="11a-0") AS 11aH, SUM(Piece="11a-1") AS 11aB, SUM(Piece="11a-2") AS 11aL, SUM(Piece="11b-0") AS 11bH, SUM(Piece="11b-1") AS 11bB, SUM(Piece="11b-2") AS 11bL, SUM(Piece="11c-0") AS 11cH, SUM(Piece="11c-1") AS 11cB, SUM(Piece="11c-2") AS 11cL   FROM collections WHERE Player="' . $name . '"');          
        return $query->result();
    }
    

}