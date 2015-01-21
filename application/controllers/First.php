<?php

class First extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $record = $this->quotes->first();
        $this->load_justone($record);
    }

    function zzz()
    {
        $record = $this->quotes->get('1');
        $this->load_justone($record);
    }

    function gimmie($which)
    {
        $record = $this->quotes->get($which);
        $this->load_justone($record);
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */
