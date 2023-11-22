<?php
    include_once("./my_explode.php");

    function my_getMonth (string $date, bool $month_name = false) {
        $months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
        $month = explode("-", $date);
        return $month_name ? $months[$month[1] - 1] : $month[1];
    }

    // echo date("Y-m-d") . "<br>";
    echo my_getMonth("2023-10-05", true);
?>