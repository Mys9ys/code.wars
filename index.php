<?php
function solution($str, $ending) {
//    var_dump(substr($str,-strlen($ending)));
//    var_dump(isset($ending));
//    var_dump(empty($ending));
    return !empty($ending) ? substr($str,-strlen($ending)) === $ending : true;
}
//var_dump(decbin(abs(-3)));

var_dump(solution("samurai", "ai"));
var_dump(solution("sumo", "omo"));
var_dump(solution('yes this will pass', ''));
//var_dump(solution('this will not pass', '`^$<>()[]*|'));
//var_dump(symmetric_point([2, 6], [-2, -6]));

//var_dump(digPow(46288, 3));
echo '<br>';

//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//