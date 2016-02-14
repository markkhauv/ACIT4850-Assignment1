<?php


class Status extends MY_Model {
    
    
    function __construct()
    {
        parent::__construct();
        $this->_tableName = 'collections';
        $this->_keyField = 'Token';
    }
    
    
    function get_status()
    {
        $query = $this->db->query('SELECT Token, Piece, Player FROM collections');          
        return $query->result();
    }
        
    
}