<?php

class First extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * loads the first quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function index()
    {
        $record = $this->quotes->first();
        $this->load_justone($record);
    }

    /**
     * loads the first quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function zzz()
    {
        $record = $this->quotes->get('1');
        $this->load_justone($record);
    }

    /**
     * loads the specified quote record from the Quotes.php, and then renders
     *   and displays it using the justone view.
     */
    function gimmie($which)
    {
        $record = $this->quotes->get($which);
        $this->load_justone($record);
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */
