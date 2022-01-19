<?php
function find_number(array $a) {
    return current(array_filter(range(1, count($a)+1), function ($el) use($a) {return !in_array($el, $a);}));
}

//var_dump(decbin(abs(-3)));

var_dump(find_number([1, 3]));
//var_dump(digPow(46288, 3));
echo '<br>';
