<?php 
    include_once('./my_strlen.php');
    include_once('./my_strtoupper.php');

    function my_ucwords (string $string, string $separators = " \t\r\n\f\v") : string {
        $string[0] = my_strtoupper($string[0]);
        for ($i = 0; $i < my_strlen($string); $i++) {
            for ($j = 0; $j < my_strlen($separators); $j++) {
                if ($string[$i] == $separators[$j]) {
                    $string[$i + 1] = my_strtoupper($string[$i + 1]);
                }
            }
        }
        return $string;
    }

    // $foo = 'hello world!';
    // $foo = my_ucwords($foo);             // Hello World!
    // echo $foo . '<br>';

    // $bar = 'HELLO WORLD!';
    // $bar = my_ucwords($bar);             // HELLO WORLD!
    // echo $bar . '<br>';
    // $bar = my_ucwords(strtolower($bar)); // Hello World!
    // echo $bar . '<br>';

    // $foo = 'hello|world!';
    // $bar = ucwords($foo);             // Hello|world!
    // echo $bar . '<br>';

    // $baz = ucwords($foo, "|"); 
    // echo $baz . '<br>';
?>