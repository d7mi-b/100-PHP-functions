<?php
    include_once('./my_ltrim.php');
    include_once('./my_rtrim.php');

    function my_trim(string $string) {
        $ltrim = my_ltrim($string);
        $rtrim = my_rtrim($ltrim);
        return $rtrim;
    }

    // $string = "        These are a few words        :) ...          ";
    // echo "<pre>";
    // echo my_trim($string);
    // echo "end";
    // echo '</pre>';
?>