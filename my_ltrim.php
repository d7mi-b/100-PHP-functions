<?php
    include_once("./my_strlen.php");

    function my_ltrim ($string) {
        $without_ltrim = '';
        $flag = false;
        for ($i = 0; $i < my_strlen($string); $i++) {
            if ($string[$i] !== " " && !$flag) {
                $flag = true;
                $without_ltrim .= $string[$i];
            }
            elseif ($flag) {
                $without_ltrim .= $string[$i];
            }
        }
        return $without_ltrim;
    }

    // $string = "        These are a few words :) ...  ";
    // echo "<pre>";
    // echo my_ltrim($string);
    // echo '</pre>';
?>