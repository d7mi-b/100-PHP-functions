<?php
    function my_array_unshift(array &$array, mixed ...$values) {
        $unsift = array();
        foreach ($values as $key => $value) {
            $unsift[$key] = $value;
        }
        foreach ($array as $key => $value) {
            if ((int) $key === $key)
                $unsift[] = $value;
            else
                $unsift[$key] = $value;
        }
        $array = $unsift;
    }

    // $queue = [
    //     "orange",
    //     "banana"
    // ];
    
    // array_unshift($queue, "apple", "raspberry");
    // echo "<pre>";
    // print_r($queue);
    // echo '</pre>';

    // $foods = [
    //     'apples' => [
    //         'McIntosh' => 'red',
    //         'Granny Smith' => 'green',
    //     ],
    //     'oranges' => [
    //         'Navel' => 'orange',
    //         'Valencia' => 'orange',
    //     ],
    // ];
    // $vegetables = [
    //     'lettuce' => [
    //         'Iceberg' => 'green',
    //         'Butterhead' => 'green',
    //     ],
    //     'carrots' => [
    //         'Deep Purple Hybrid' => 'purple',
    //         'Imperator' => 'orange',
    //     ],
    //     'cucumber' => [
    //         'Kirby' => 'green',
    //         'Gherkin' => 'green',
    //     ]
    // ];

    // array_unshift($foods, $vegetables);
    // echo "<pre>";
    // print_r($foods);
    // echo '</pre>';
?>