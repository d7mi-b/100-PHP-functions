<?php 
    include_once('./my_count.php');
    function my_compact (...$variables) {
        $array = [];
        for ($i = 0; $i < my_count($variables); $i++) {
            $var = $variables[$i];
            global $$var;
            $array[$variables[$i]] = $$var;
        }
        return $array;
    }

    // $city  = "San Francisco";
    // $state = "CA";
    // $event = "SIGGRAPH";

    // $location_vars = array("event", "city", "state");

    // $result = my_compact("event", "city", "state");
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>