<?php 
    include_once('./my_strlen.php');

    function my_str_pad (string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT) : string {
        if ($length <= my_strlen($string))
            return $string;
        for ($i = 0; $i < $length; $i++) {
            if ($i >= my_strlen($string)) {
                if ($pad_type === STR_PAD_RIGHT) {
                    for ($j = 0; $j < my_strlen($pad_string); $j++) {
                        $string[$i] = $pad_string[$j];
                        if ($length <= my_strlen($string)) {
                            break;
                        }
                    }
                } elseif ($pad_type === STR_PAD_LEFT) {
                    $str = $string;
                    $string = '';
                    for ($j = 0; $j < $length - my_strlen($string); $j++) {
                        for ($j = 0; $j < my_strlen($pad_string); $j++) {
                            $string .= $pad_string[$j];
                            if (($length - my_strlen($str)) <= my_strlen($string)) {
                                break;
                            }
                        }
                        if (($length - my_strlen($str)) <= my_strlen($string)) {
                            break;
                        }
                    }
                    $string .= $str;
                }
            }
        }
        return $string;
    }

    // $input = "Alien";
    // echo my_str_pad($input,  10, "___") . '<br>';
    // echo my_str_pad($input, 10, "-=", STR_PAD_LEFT) . '<br>';
    // echo my_str_pad($input, 10, "*+", STR_PAD_LEFT) . '<br>';
?>