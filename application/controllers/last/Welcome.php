<?php

class Welcome extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * loads the last quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function index()
    {
        $record = $this->quotes->last();
        $this->load_justone($record);
    }
}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */
