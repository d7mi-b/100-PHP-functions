<?php
    function my_gettype (mixed $value) : string {
        if ($value === (object) $value) {
            return "object";
        } elseif ($value === (int) $value) {
            return "integer";
        } elseif ($value === (float) $value) {
            return "double";
        } elseif ($value === (bool) $value) {
            return "boolean";
        } elseif ($value === (string) $value) {
            return "string";
        } elseif ($value === (array) $value) {
            return "array";
        } elseif ($value === NULL) {
            return "NULL";
        } else {
            return "unknown type";
        }
    }
    // class D {

    // }

    // $data = array(1, 1., NULL, new D, 'foo');

    // foreach ($data as $value) {
    //     echo my_gettype($value), "<br>";
    // }
?>