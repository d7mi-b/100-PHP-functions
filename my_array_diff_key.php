<?php
    include_once('./my_count.php');

    function my_array_diff_key (array $array, array ...$arrays): array {
        $diff = array();
        foreach ($array as $key => $value) {
            $exsit = true;
            foreach ($arrays as $array2) {
                foreach ($array2 as $key2 => $value2) {
                    if ($key === $key2) {
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

    // $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
    // $array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

    // $result = my_array_diff_key($array1, $array2);

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