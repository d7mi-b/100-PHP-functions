<?php
    include_once("./my_explode.php");

    function my_getFullDate (string $date) {
        $date = explode(" ", $date);
        return $date[0];
    }

    // echo date("Y-m-d") . "<br>";
    echo my_getFullDate("2023-10-05");
?>