<?php
// задание Reversed Strings
//'world'  =>  'dlrow'
//'word'   =>  'drow'

// мое решение
function solution($str) {
    return implode('', array_reverse(str_split($str)));
}


// лучшее
function solution($str) {
    return strrev($str);
}


// задание Points of Reflection
function symmetric_point($p, $q) {
    return [2*$q[0]-$p[0], 2*$q[1]-$p[1]];
}

// лучшее аналогично


// задание Exclamation marks series #2: Remove all exclamation marks from the end of sentence
//remove("Hi!") === "Hi"
//remove("Hi!!!") === "Hi"
//remove("!Hi") === "!Hi"
//remove("!Hi!") === "!Hi"
//remove("Hi! Hi!") === "Hi! Hi"
//remove("Hi") === "Hi"


// мое решение
function remove(string $s): string {
    return  rtrim($s, '!');
}

// лучшее
function remove($s){
    return preg_replace("/!+$/","",$s);
}

function remove(string $s): string {
    return substr($s,-1) === '!' ? remove(substr($s, 0, -1)) : $s;
}


// задание  Fake Binary
//Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.
//'01011110001100111', fake_bin('45385593107843568')

// мое решение
function fake_bin(string $s): string {
    $a = preg_replace("/[0-4]/","0",$s);
    return preg_replace("/[5-9]/","1",$a);
}

// лучшее
function fake_bin(string $s): string {
    return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
}

function fake_bin(string $s): string {
    return strtr($s, '0123456789', '0000011111');
}

function fake_bin(string $s): string {
    return preg_replace(['/[1-4]/','/[5-9]/'], [0,1], $s);
}

// задание
//For example, if a bottle cost £10 normally and the discount in duty free was 10%, you would save £1 per bottle. If your holiday cost £500, the answer you should return would be 500.
//50,12,1000 ->	166


// мое решение
function dutyFree($normPrice, $discount, $hol) {
    return intval($hol/($discount*$normPrice/100));
}

// лучшее
function dutyFree($p, $d, $h) {
    return floor($h / ($p * $d / 100));
}