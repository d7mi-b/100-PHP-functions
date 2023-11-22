<?php
    function my_range($start, $end, $step = 1) {
        $result = array();
        for ($element = $start; $element <= $end; $step === 1 ? $element++ : $element += $step) {
            $result[] = $element;
        }
        return $result;
    }

    // echo json_encode(my_range('i', 't')) . '<br>';
    // echo json_encode(my_range(10, 50, 10)) . '<br>';    
?>