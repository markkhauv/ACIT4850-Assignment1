<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Application {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        // shows player dropdown list, portfolio, content, and login username
        $this->data['dropdown'] = $this->players();
        $this->data['playerportfolio'] = $this->portfo();
        $this->data['playerportfolio'] = $this->ahead();
        $this->data['content'] = $this->parser->parse('portfolio', $this->data, true);
        $this->data['username'] = $this->session->userdata('username');
        $this->render();
    }

    // requests player portfolio data from Portfo model
    private function portfo() {
        $this->load->model('Portfo');

        $rows = array();
        foreach ($this->Portfo->get_portfolio() as $record) {
            $rows[] = (array) $record;
        }
        $this->data['transactions'] = $rows;

        return $this->parser->parse('playerportfolio', $this->data, true);
    }

    // requests players data from Portfo model and displays them in a dropdown
    private function players() {
        $this->load->model('Portfo');

        $rows = array();
        foreach ($this->Portfo->get_players() as $record) {
            $rows[] = (array) $record;
        }
        $this->data['players'] = $rows;

        return $this->parser->parse('dropdown', $this->data, true);
    }

    private function ahead() {
        $this->load->model('Portfo');

        $rows = array();
        foreach ($this->Portfo->get_headA() as $record) {
            $rows[] = (array) $record;
        }
        $this->data['collections'] = $rows;

        return $this->parser->parse('playerportfolio', $this->data, true);
    }

}

/* End of file Portfolio.php */
/* Location: application/controllers/Portfolio .php */