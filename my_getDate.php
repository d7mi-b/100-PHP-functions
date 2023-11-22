<?php
    include_once("./my_explode.php");

    function my_getDate (string $date) {
        $date = explode("-", $date);
        return $date[2];
    }

    // echo date("Y-m-d") . "<br>";
    echo my_getDate("2023-10-05");
?>