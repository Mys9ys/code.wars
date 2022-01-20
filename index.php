<?php
function find_uniq($a) {
    sort($a);
    return $a[0] !== $a[1] ? $a[0] : array_pop($a);
}

//var_dump(decbin(abs(-3)));

var_dump(find_uniq([1, 1, 1, 4, 1, 1]));
var_dump(find_uniq([0, 0, 0.55, 0, 0]));
//var_dump(digPow(46288, 3));
echo '<br>';

//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//}