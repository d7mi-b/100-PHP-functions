<?php 
    include_once("./my_count.php");
    include_once("./my_explode.php");

    function my_parse_str(string $string, array &$array): array {
        $string = my_explode("&", $string);
        for( $i = 0; $i < my_count($string); $i++ ) {
            $query = my_explode("=", $string[$i]);
            $array[$query[0]] = $query[1];
        }

        return $array;
    }


    // $query = [];
    // my_parse_str("name=Ahmed&email=email@mail.com&phone=754875", $query);
    // echo "<pre>";
    // print_r($query);
    // echo "</pre>";
?>