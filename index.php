<?php
function dutyFree($normPrice, $discount, $hol) {
    return intval($hol/($discount*$normPrice/100));
}
var_dump(dutyFree(12, 50, 1000));
//var_dump(finalGrade(85, 5));


//var_dump(digPow(46288, 3));
echo '<br>';

//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//