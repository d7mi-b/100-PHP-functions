<?php
    include_once('./my_count.php');

    function my_array_key_last (array $array) {
        $index = 0;
        foreach ($array as $key => $value) {
            if ($index === my_count($array) - 1) {
                return $key;
            }
            $index++;
        }
    }

    // $arr = array(
    //     "y" => 'y',
    //     'c' => 5,
    //     4 => "d",
    //     "last" => "4"
    // );

    // echo my_array_key_last($arr);
?>