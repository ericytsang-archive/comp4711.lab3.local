<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    /**
     * loads the homepage, and shows a image of the person who said each quote.
     * clicking on the image will link to a page with their quote on it.
     */
    function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'homepage';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array(
                'who' => $record['who'],
                'mug' => $record['mug'],
                'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }

    /**
     * loads the second quote record from the Quotes.php, and then renders and
     *   displays it using the justone view.
     */
    function shucks()
    {
        $record = $this->quotes->get('2');
        $this->load_justone($record);
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */
