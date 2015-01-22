<?php


class Masseur
{

    /**
     * finds all the paragraph elements in the document that are of class
     *   "lead", and makes all title cased words in the paragraphs bold using
     *   the <strong> tag.
     */
    function massage_output()
    {
        // get this page's DOM document
        $doc = $this->_get_document();

        // make title-cased words in paragraph tags of the "lead" class bold
        $paragraphs = $doc->getElementsByTagName('p');
        foreach($paragraphs as $p)
        {
            if($p->getAttribute('class') === 'lead')
            {
                $this->_bold_element_text($doc,$p);
            }
        }

        // render the document
        echo $doc->saveHTML();
    }

    /**
     * bolds the title cased words that of the passed $element.
     *
     * @param      {DOMDocument} $doc DOMDocument that the $element is part of.
     * @param      {DOMElement} $element an element in the $doc to process.
     */
    function _bold_element_text($doc,$element)
    {
        // bold element text
        $string = $element->nodeValue;
        $pattern = '/([A-Z]+[^-\s]*)/';
        $replacement = '<strong>${1}</strong>';

        $html_string = preg_replace($pattern,$replacement,$string);

        $fragment = $doc->createDocumentFragment();
        $fragment->appendXML($html_string);

        // replace element text
        $element->nodeValue = '';
        $element->appendChild($fragment);
    }

    /**
     * returns a DOMDocument object that is this page's HTML DOM.
     *
     * @return     {DOMDocument} a DOMDocument object that is this page's HTML
     *   DOM.
     */
    function _get_document()
    {
        // get the page's output
        $CI = &get_instance();
        $output = $CI->output->get_output();

        // parse it into a DOMDocument object
        $doc = new DOMDocument();
        $doc->loadHTML($output);

        return $doc;
    }

}

/* End of file Masseur.php */
/* Location: application/hooks/Massuer.php */
