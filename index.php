<?php
function symmetric_point($p, $q) {
    return [2*$q[0]-$p[0], 2*$q[1]-$p[1]];
}

//var_dump(decbin(abs(-3)));

var_dump(symmetric_point([0, 0], [1, 1]));
var_dump(symmetric_point([2, 6], [-2, -6]));

//var_dump(digPow(46288, 3));
echo '<br>';

//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//