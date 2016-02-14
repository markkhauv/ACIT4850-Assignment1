<?php

class Status extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->_tableName = 'collections';
        $this->_keyField = 'Token';
    }

    // returns token ids, pieces, and players from collections table
    function get_status() {
        $query = $this->db->query('SELECT Token, Piece, Player FROM collections');
        return $query->result();
    }

}

/* End of file Status.php */
/* Location: application/models/Status.php */   