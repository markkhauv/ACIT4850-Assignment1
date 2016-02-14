<?php

class Parts extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->_tableName = 'collections';
        $this->_keyField = 'Player';
    }

    // returns requested parts from the collections table for the currently logged in user for parts 0
    function get_partszero() {
        $name = $this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-0"');
        return $query->result();
    }

    // returns requested parts from the collections table for the currently logged in user for parts 1
    function get_partsone() {
        $name = $this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-1"');
        return $query->result();
    }

    // returns requested parts from the collections table for the currently logged in user for parts 2
    function get_partstwo() {
        $name = $this->session->userdata('username');
        $query = $this->db->query('SELECT Piece FROM collections WHERE Player="' . $name . '" AND Piece LIKE "%-2"');
        return $query->result();
    }

}

/* End of file Parts.php */
/* Location: application/models/Parts.php */    