<?php


class Parts extends MY_Model {
    
    
    function __construct()
    {
        parent::__construct();
        $this->_tableName = 'collections';
        $this->_keyField = 'Player';
    }
    
    
    function get_partszero()
    {
        $name=$this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-0"');          
        return $query->result();
    }
    
     function get_partsone()
    {
        $name=$this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-1"');          
        return $query->result();
    }
    
     function get_partstwo()
    {
        $name=$this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-2"');          
        return $query->result();
    }
        
    
}