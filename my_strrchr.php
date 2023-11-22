<?php
    include_once('./my_strlen.php');

    function my_strrchr (string $haystack, string $needle, bool $before_needle = false): string|false {
        $offset = 0;
        $string = '';
        for ($i = my_strlen($haystack) - 1; $i > -1; $i--) {
            if ($needle === $haystack[$i]) {
                $offset = $i;
            }
        }
        for ($i =$offset; $i < my_strlen($haystack); $i++) {
            $string .= $haystack[$i];
        }
        return $string;
    }

    $ext = my_strrchr('somefile.txt', '.');
    echo "file extension: $ext \n";
?>