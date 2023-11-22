<?php
    include_once('./my_strtolower.php');

    function my_lcfirst(string $string): string {
        $string[0] = my_strtolower($string[0]);
        return $string;
    }

    // $foo = 'HelloWorld';
    // $foo = my_lcfirst($foo);             // helloWorld
    // echo $foo . "<br>";

    // $bar = 'HELLO WORLD!';
    // $bar = my_lcfirst($bar);             // hELLO WORLD!
    // echo $bar . "<br>";

    // $bar = my_lcfirst(strtoupper($bar)); // hELLO WORLD!
    // echo $bar . "<br>";
?>