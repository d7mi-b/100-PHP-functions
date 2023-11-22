<?php
    include_once("./my_explode.php");

    function my_getYear (string $date) {
        $year = explode("-", $date);
        return $year[0];
    }

    // echo date("Y-m-d") . "<br>";
    // echo my_getYear("2023-10-05");
?>