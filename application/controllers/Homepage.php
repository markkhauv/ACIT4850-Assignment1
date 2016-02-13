<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Application {


     function __construct()
	{
		parent::__construct();
	}
    
   	public function index()
	{
                $this->data['playerlist'] = $this->players();
                $this->data['status'] = $this->status();
                $this->data['content'] = $this->parser->parse('homepage', $this->data, true);
                $this->render();
	}
    
    private function players()
        {
            $this->load->model('Robots');
            
          
            $rows = array();
            foreach ($this->Robots->get_players() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['players'] = $rows;
            
            return $this->parser->parse('playerlist', $this->data, true);
        }
        
         private function status()
        {
            $this->load->model('Status');
            
          
            $rows = array();
            foreach ($this->Status->get_status() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            
            return $this->parser->parse('status', $this->data, true);
        }
}
