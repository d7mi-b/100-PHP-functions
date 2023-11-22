<?php
    function my_random () {
        return time() % 1;
    }

    $date  = date("ms") % 59;

    echo $date . '<br>';

    my_random();
?>