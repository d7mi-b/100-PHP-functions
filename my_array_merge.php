<?php
    include_once('./my_count.php');

    function my_array_merge(array ...$arrays) {
        $merge = array();
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if ((string) $key === $key)
                    $merge[$key] = $value;
                else 
                $merge[] = $value;
            }
        }
        return $merge;
    }

    // $array1 = array("color" => "red", 2, 4);
    // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    // $result = my_array_merge($array1, $array2);

    // $array1 = array();
    // $array2 = array(1 => "data");
    // $result = my_array_merge($array1, $array2);

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>