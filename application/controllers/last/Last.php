<?php

class Last extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $record = $this->quotes->last();
        $this->load_justone($record);
    }
}

/* End of file Last.php */
/* Location: application/controllers/last/Last.php */
