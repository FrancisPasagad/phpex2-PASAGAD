<?php
class processes{
    function maxRange($first_value, $second_value){
        $maxRnge = $first_value + $second_value - 1;
        return $maxRnge;
    }

    function binCount($binary_value){
        $numCount = 0;
        while($binary_value)
        {
            $numCount += ($binary_value & 1);
            $binary_value = $binary_value >> 1;
        }
        return $numCount;
    }

    function twoPrts($first_part, $second_part){
        $joined_path = str_replace('/', '', $first_part);
        $joined_path .= "/" . str_replace('/', '', $second_part);
        return $joined_path;
    }

    function sastryNum($sastry_number){
        $conc = $sastry_number . $sastry_number+1;
        $check = 0;
        for ($i = 1; $i * $i <= $conc; $i++) {
                if (($conc % $i == 0) && ($conc / $i == $i)) {
                    $check = 1;
                    return "<h1>"."The answer is ". $sastry_number . " → ".$conc . " → " ."TRUE(". $sastry_number. "is a perfect square)";
        
                }
            }
        if($check == 0){
        return "<h1>"."The answer is ". $sastry_number . $conc . " →". "FALSE(". $sastry_number. " is not a perfect square)" . "</h1>";
        }
    }
}