<?php
function remove(string $s): string {
    $arr = str_split($s);
    $first = '';
    if($arr[0] === '!') $first ='!';
    return $first . implode('', array_filter($arr, function ($el) {return $el != '!';}));
}
//var_dump(decbin(abs(-3)));

var_dump(remove("!Hi!"));


//var_dump(digPow(46288, 3));
echo '<br>';

//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//