<?php
    include_once('./my_strtoupper.php');

    function my_ucfirst(string $string): string {
        $string[0] = my_strtoupper($string[0]);
        return $string;
    }
?>