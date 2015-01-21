<?php

class Masseur
{

    function massage_output()
    {
        $CI = &get_instance();
        echo $CI->get_instance()->output->get_output();
        echo 'eric';
    }

}

/* End of file Masseur.php */
/* Location: application/hooks/Massuer.php */
