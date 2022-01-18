<?php
function solution($number){
    return array_sum(array_map(function($el) {
        return $el%3 === 0 || $el%5 === 0 ? $el : 0;
    }, range(1, $number-1)));
}

//var_dump(decbin(abs(-3)));

var_dump(solution(10));
echo '<br>';
