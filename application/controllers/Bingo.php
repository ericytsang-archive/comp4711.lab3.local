<?php

class Bingo extends Application
{

    /**
     * loads the fifth quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function index()
    {
        $record = $this->quotes->get('5');
        $this->load_justone($record);
    }

    /**
     * loads the sixth quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function wisdom()
    {
        $record = $this->quotes->get('6');
        $this->load_justone($record);
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
