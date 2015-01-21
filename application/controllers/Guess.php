<?php

class Guess extends Application
{

    /**
     * loads the fourth quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function index()
    {
        $record = $this->quotes->get('4');
        $this->load_justone($record);
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */
