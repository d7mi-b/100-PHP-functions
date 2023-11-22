<?php
    include_once('./my_strlen.php');

    function my_explode (string $separator, string $string) {
        $result = array();
        $index = 0;
        $start = 0;
        for ($i = 0; $i < my_strlen($string); $i++){
            if ($string[$i] === $separator) {
                $result[$index] = '';
                for ($j = $start; $j < $i; $j++) {
                    $result[$index] .= $string[$j];
                }
                $index++;
                $start = $i + 1;
            }
        }
        $result[$index] = '';
        for ($i = $start; $i < my_strlen($string); $i++) {
            $result[$index] .= $string[$i];
        }
        return $result;
    }

    // $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
    // $pieces = my_explode("c", $pizza);
    // echo $pieces[0]; // piece1
    // echo $pieces[1]; // piece2
    // echo "<pre>";
    // print_r($pieces);
    // echo "</pre>";
    // echo "<pre>";
    // print_r(explode("c", $pizza));
    // echo "</pre>";
    // $year = my_explode("-", "2023-10-05");
    // print_r($year);
?>