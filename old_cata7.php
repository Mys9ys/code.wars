<?php
// задание String ends with?
//solution('abc', 'bc') // returns true
//solution('abc', 'd') // returns false

/// мое решение
function solution($str, $ending) {
    return !empty($ending) ? substr($str,-strlen($ending)) === $ending : true;
}

/// лучшее
function solution(string $str, string $ending): bool {
  return str_ends_with($str, $ending);
}

function solution(string $str, string $ending): bool {
    return $ending == '' || substr_compare($str, $ending, -strlen($ending)) == 0;
}

function solution($str, $ending): bool {
    return substr($str, -strlen($ending), strlen($ending)) == $ending;
}