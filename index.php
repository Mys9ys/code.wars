<?php
include 'function.php';

function alphabet_position(string $s)
{
    $alf = range('a', 'z');
    return trim(preg_replace('/ {2,}/', ' ', join(' ', array_map(function ($el) use ($alf) {
        if (array_search(strtolower($el), $alf) > -1) return array_search(strtolower($el), $alf) + 1;
    }, str_split($s)))));
}

var_dump(alphabet_position('The sunset sets at twelve o\' clock.')); //22
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

