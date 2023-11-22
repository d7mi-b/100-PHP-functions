<?php
    include_once("./my_strlen.php");

    function my_rtrim ($string) {
        $without_rtrim = '';
        $end_index = 0;
        for ($i = my_strlen($string) - 1; $i >= 0; $i--) {
            if ($string[$i] !== " ") {
                $end_index = $i;
                break;
            }
        }
        for ($i = 0; $i <= $end_index; $i++) {
            $without_rtrim .= $string[$i];
        }
        return $without_rtrim;
    }

    // $string = "        These are a few words :) ...                      ";
    // echo "<pre>";
    // echo $string;
    // echo "end";
    // echo '</pre>';

    // echo "<pre>";
    // echo my_rtrim($string);
    // echo "end";
    // echo '</pre>';
?>