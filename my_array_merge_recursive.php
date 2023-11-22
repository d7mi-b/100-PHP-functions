<?php
    include_once('./my_count.php');
    include_once('./my_array_key_exists.php');
    include_once('./my_array_push.php');
    include_once('./my_is_array.php');

    function my_array_merge_recursive(array ...$arrays) {
        $merge = array();
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if ((string) $key === $key) {
                    if (my_is_array($merge[$key])) {
                        my_array_push($merge[$key], $value);
                    } else {
                        $merge[$key] = $value;
                    }
                }
                else 
                $merge[] = $value;
            }
        }
        return $merge;
    }

    $ar1 = array("color" => array("favorite" => "red"), 5);
    $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
    $result = my_array_merge_recursive($ar1, $ar2);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>