<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {

	public function index()
	{
		$this->data['headparts'] = $this->partshead();
                $this->data['bodyparts'] = $this->partsbody();
                $this->data['legparts'] = $this->partsleg();
                $this->data['content'] = $this->parser->parse('assembly', $this->data, true);
                $this->data['pagebody'] = 'assembly';
                $this->render();
	}
        
        private function partshead()
        {
            $this->load->model('Parts');
            
          
            $rows = array();
            foreach ($this->Parts->get_partszero() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            
            return $this->parser->parse('headparts', $this->data, true);
        }
        
        private function partsbody()
        {
            $this->load->model('Parts');
            
          
            $rows = array();
            foreach ($this->Parts->get_partsone() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            
            return $this->parser->parse('bodyparts', $this->data, true);
        }
        
        private function partsleg()
        {
            $this->load->model('Parts');
            
          
            $rows = array();
            foreach ($this->Parts->get_partstwo() as $record)
            {
                $rows[] = (array) $record;
            }
            $this->data['collections'] = $rows;
            
            return $this->parser->parse('legparts', $this->data, true);
        }
}
