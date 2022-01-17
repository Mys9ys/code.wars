<?php
function bitsWar($numbers){
    $odd = [];
    $even = [];
    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $even[] = $num < 0 ? -array_sum(str_split(decbin(abs($num)))) : array_sum(str_split(decbin($num)));
        } else {
            $odd[] = $num < 0 ? -array_sum(str_split(decbin(abs($num)))) : array_sum(str_split(decbin($num)));
        }
    }
    $odd_sum = array_sum($odd);
    $even_sum = array_sum($even);

    if ($odd_sum == $even_sum) return 'tie';
    return $odd_sum > $even_sum ? 'odds win' : 'evens win';
}

//var_dump(decbin(abs(-3)));

var_dump(bitsWar([2,3,-5,20]));
echo '<br>';
var_dump(bitsWar([1,5,12]));
echo '<br>';
var_dump(bitsWar([7,-3,20]));