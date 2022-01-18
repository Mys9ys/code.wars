<?php
function digPow($n, $p) {
    $arr2[] = [];
    foreach (str_split((string)$n) as $i=>$el){
        $arr2[] = intval($el)**($p++);
    }

    $sum = array_sum($arr2);
    if($sum<$n) return -1;
    return $sum%$n == 0 ? $sum/$n : -1;
}

//var_dump(decbin(abs(-3)));

var_dump(digPow(89, 1));
var_dump(digPow(46288, 3));
echo '<br>';
