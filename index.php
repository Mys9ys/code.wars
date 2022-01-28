<?php
function reverseWords($str) {
    return implode(' ', array_reverse(explode( ' ', $str))); // reverse those words
}

var_dump(reverseWords("hello world!")); //22
echo '<br>';
//var_dump(twice_as_old(55, 30)); //5
echo '<br>';
//var_dump(twice_as_old(29, 0)); //5
//var_dump(finalGrade(85, 5));


//var_dump(digPow(46288, 3));


//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//