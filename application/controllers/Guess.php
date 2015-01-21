<?php

class Guess extends Application
{

    function index()
    {
        $record = $this->quotes->get('4');
        $this->load_justone($record);
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */
