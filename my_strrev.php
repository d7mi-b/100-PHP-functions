<?php
    include_once("./my_strlen.php");

    function my_strrev($words) {
        $revers = "";

        for ($i = my_strlen($words) - 1; $i >= 0; $i--) {
            $revers .= $words[$i];
        }

        return $revers;
    }
?>