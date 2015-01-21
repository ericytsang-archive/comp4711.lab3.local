<?php

class Bingo extends Application
{

    function index()
    {
        $record = $this->quotes->get('5');
        $this->load_justone($record);
    }

    function wisdom()
    {
        $record = $this->quotes->get('6');
        $this->load_justone($record);
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
