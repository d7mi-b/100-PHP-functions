<?php
    include_once('./my_array_key_exists.php');

    function my_ksort (array &$array) {
        $sorted = [];
        foreach ($array as $key => $value) {
            foreach ($array as $key2 => $value2) {
                if ($key < $key2) {
                    $sorted[$key] = $value;
                }
            }
        }
        foreach ($array as $key => $value) {
            if (!my_array_key_exists($key, $sorted))
                $sorted[$key] = $value;
        }
        $array = $sorted;
    }

    // $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
    // my_ksort($fruits);
    // foreach ($fruits as $key => $val) {
    //     echo "$key = $val\n";
    // }

    // echo "<pre>";
    // print_r($fruits);
    // echo "</pre>";
?>