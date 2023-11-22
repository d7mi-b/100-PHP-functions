<?php
    include_once('./my_count.php');

    function my_array_diff (array $array, array ...$arrays): array {
        $diff = array();
        foreach ($array as $key => $value) {
            $exsit = true;
            foreach ($arrays as $array2) {
                foreach ($array2 as $key2 => $value2) {
                    if ($value === $value2) {
                        $exsit = false;
                        break;
                    }
                }
            }
            if ($exsit) {
                $diff[$key] = $value;
            }
        }
        return $diff;
    }

    // $array1 = array("a" => "green", "red", "blue", "red", "bink");
    // $array2 = array("b" => "green", "yellow", "red");
    // $array3 = array("b" => "green", "yellow", "red", "green");
    // $result = my_array_diff($array1, $array2, $array3);

    // echo '<pre>';
    // print_r($result);
    // echo "</pre>";

    // $source = [1, 2, 3, 4];
    // $filter = [3, 4, [5], 6];
    // $result = my_array_diff($source, $filter);

    // echo '<pre>';
    // print_r($result);
    // echo "</pre>";
?>