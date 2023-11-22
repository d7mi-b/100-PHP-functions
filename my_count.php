<?php
    function my_count (array $array) {
        $counter = 0;

        foreach($array as $key => $value) {
            $counter++;
        }

        return $counter;
    }

    // $arr = [null, [1, 5, 4], 4];

    // echo my_count($arr);
?>