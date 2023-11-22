<?php 
    function my_array_intersect (array $array1 , array ...$arrays) : array {
        $intersecy = array();
        foreach ($array1 as $key => $value) {
            $exsit = false;
            foreach ($arrays as $array2) {
                foreach ($array2 as $key2 => $value2) {
                    if ($value === $value2) {
                        $exsit = true;
                        break;
                    }
                }
            }
            if ($exsit) {
                $intersecy[$key] = $value;
            }
        }
        return $intersecy;
    }

    // $array1 = array("a" => "green", "red", "blue", "red", "bink");
    // $array2 = array("b" => "green", "yellow", "red");
    // $array3 = array("b" => "green", "yellow", "red", "green");
    // $result = my_array_intersect($array1, $array2, $array3);

    // echo '<pre>';
    // print_r($result);
    // echo "</pre>";

    // $source = [1, 2, 3, 4];
    // $filter = [3, 4, [5], 6];
    // $result = my_array_intersect($source, $filter);

    // echo '<pre>';
    // print_r($result);
    // echo "</pre>";
?>