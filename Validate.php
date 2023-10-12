<?php 

class Validate {
    public static function string ($value, $min = 1, $max = INF) {
        trim($value);

        return strlen($value) >= $min && strlen($value) <= $max; 
    }
}