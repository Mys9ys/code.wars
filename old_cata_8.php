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


// задание Exclamation marks series #2: Remove all exclamation marks from the end of sentence
//remove("Hi!") === "Hi"
//remove("Hi!!!") === "Hi"
//remove("!Hi") === "!Hi"
//remove("!Hi!") === "!Hi"
//remove("Hi! Hi!") === "Hi! Hi"
//remove("Hi") === "Hi"


/// мое решение
function remove(string $s): string {
    return  rtrim($s, '!');
}

/// лучшее
function remove($s){
    return preg_replace("/!+$/","",$s);
}

function remove(string $s): string {
    return substr($s,-1) === '!' ? remove(substr($s, 0, -1)) : $s;
}
