<?php 
    function my_array_intersect_key (array $array1 , array ...$arrays) : array {
        $intersecy = array();
        foreach ($array1 as $key => $value) {
            $exsit = false;
            foreach ($arrays as $array2) {
                foreach ($array2 as $key2 => $value2) {
                    if ($key === $key2) {
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

    // $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
    // $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

    // echo '<pre>';
    // print_r(my_array_intersect_key($array1, $array2));
    // echo '</pre>';
?>