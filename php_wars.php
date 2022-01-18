<?
//количество делителей

// мое решение

// интересные решения
function divisors($n) {
    return count(array_filter(range(1, $n), function($d)use($n){ return $n%$d==0; }));
}

function divisors($n) {
    return array_count_values(array_map(function($a) use ($n) {return $n % $a; }, range(1, $n)))['0'];
}

// задание
//solve("abcd") = 0, because no prefix == suffix.


// интересные решения
function solve($s) {
    preg_match_all('/^(.*).*\1$/', $s, $m);
    return strlen($m[1][0]);
}

function solve($s) {
    $num = null;

    for ($i = 1; $i <= strlen($s)/2; $i++) {
        $prefix = substr($s, 0, $i);
        $suffix = substr($s, strlen($s) - $i);
        $num = $prefix == $suffix ? $prefix : $num;
    }

    return strlen($num);
}

//задание

//m = 2
//n = 4
//
//result = [(2, 2), (2, 3), (2, 4), (3, 3), (3, 4), (4, 4)]

// интересные решения
function generatePairs(int $m,int $n) {
    $response = [];
    while($m <= $n) {
        foreach(range($m, $n) as $value) {
            $response[] = [$m, $value];
        }

        $m++;
    }

    return $response;
}

//задание
//highAndLow("1 2 3 4 5");  // return "5 1"

// мое решение
function highAndLow($numbers)
{
    $arr = explode(' ', $numbers);
    $max = $arr[0];
    $min = $arr[0];
    foreach ($arr as $n){
        $max = $n>=$max ? $n : $max;
        $min = $n<=$min ? $n : $min;
    }
    return implode([$max, $min], ' ');
}

// интересные решения
function highAndLow($numbers) {
    $a = explode(' ', $numbers);
    return max($a) . " " . min($a);
}

function highAndLow($numbers) {return sprintf("%d %d", max(explode(" ", $numbers)), min(explode(" ", $numbers)));}