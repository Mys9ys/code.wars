<?php
function twice_as_old($dad_years_old, $son_years_old, $year=0) {
    if($son_years_old === 0) return $dad_years_old;

    if ($dad_years_old / $son_years_old === 2) return $year;

    if ($dad_years_old / $son_years_old > 2) {
        $dad_years_old++;
        $son_years_old++;
    }

    if ($dad_years_old / $son_years_old < 2) {
        $dad_years_old--;
        $son_years_old--;
    }
    $year++;
    return twice_as_old($dad_years_old, $son_years_old, $year);
}

var_dump(twice_as_old(36, 7)); //22
echo '<br>';
var_dump(twice_as_old(55, 30)); //5
echo '<br>';
var_dump(twice_as_old(29, 0)); //5
//var_dump(finalGrade(85, 5));


//var_dump(digPow(46288, 3));


//function find_uniq($a) {
//    foreach (array_unique($a) as $num){
//        if(count(array_keys($a,$num)) === 1) return $num;
//    }
//