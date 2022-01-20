<?php
// задание Reversed Strings
//'world'  =>  'dlrow'
//'word'   =>  'drow'

/// мое решение
function solution($str) {
    return implode('', array_reverse(str_split($str)));
}


/// лучшее
function solution($str) {
    return strrev($str);
}


// задание Points of Reflection
function symmetric_point($p, $q) {
    return [2*$q[0]-$p[0], 2*$q[1]-$p[1]];
}

/// лучшее аналогично