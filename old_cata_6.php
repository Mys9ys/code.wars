<?php

/// задание
//'codewars' is a merge from 'cdw' and 'oears':
//
//    s:  c o d e w a r s   = codewars
//part1:  c   d   w         = cdw
//part2:    o   e   a r s   = oears

/// мое решение (не прошло)
function isMerge($s, $part1, $part2) {
//    if(count(str_split($s)) !== count(str_split($part1.$part2))) return false;
//    $result = array_diff(str_split($s), str_split($part1.$part2));
//    return count($result) == 0 ? true: false;
    $ar1 = str_split($part1);
    $ar2 = str_split($part2);

    foreach (str_split($s) as $char)
    {
        if($char === $ar1[0]) {
            array_shift($ar1);
        }
        elseif($char === $ar2[0])
        {
            array_shift($ar2);
        }
        else
        {
            return false;
        }
    }

    return count($ar1)+count($ar2) == 0 ? true : false;
}

// лучшее
function isMerge($s, $part1, $part2) {
    return !$s ? !($part1 || $part2) :
        $s[0] == substr($part1,0,1) && isMerge(substr($s,1), substr($part1,1), $part2) ||
        $s[0] == substr($part2,0,1) && isMerge(substr($s,1), $part1, substr($part2, 1));
}

function isMerge(string $str, string $part1, string $part2): bool {
    [$strPrefix, $strRest]     = [substr($str, 0, 1), substr($str, 1)];
    [$part1Prefix, $part1Rest] = [substr($part1, 0, 1), substr($part1, 1)];
    [$part2Prefix, $part2Rest] = [substr($part2, 0, 1), substr($part2, 1)];

    return $str === ''
        ? $part1 === '' && $part2 === ''
        : (
            ($strPrefix === $part1Prefix && isMerge($strRest, $part1Rest, $part2))
            || ($strPrefix === $part2Prefix && isMerge($strRest, $part1, $part2Rest))
        );
}

// задание
//1705 --> 18
//1900 --> 19
//1601 --> 17
//2000 --> 20

/// мое решение
function centuryFromYear($year)
{
  return $year%100 === 0 ? intdiv($year, 100) : intdiv($year, 100)+1;
}

// лучшее
function centuryFromYear($year)
{
    return ceil($year / 100);
}

// задание
//1.2.3.4
//123.45.67.89

/// мое решение
function isValidIP(string $str): bool
{
    $arr = explode('.', str_replace(' ', '.', $str));
    if (count($arr) != 4) return false;
    foreach ($arr as $el) {
        if (is_numeric($el)) {
            if ($el > 255) return false;
        } else {
            return false;
        }
    }
    return true;
}


// лучшее
function isValidIP(string $str): bool
{
    return filter_var($str,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
}

function isValidIP(string $str): bool
{
    $arr = explode('.', $str);
    return 4 == count(array_filter($arr, function ($number){ return strlen((string)intval($number)) == strlen($number) && $number >= 0 && $number <= 255;}));
}

// задание
//persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
//persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
//persistence(4) === 0; // because 4 is already a one-digit number


// лучшее
function persistence(int $num): int {
    return strlen($num) > 1 ? 1 + persistence(array_product(str_split($num))) : 0;
}


///// задание
//1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153
//1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938

/// мое решение
function narcissistic(int $value): bool {
    $arr = str_split($value);
    $res = 0;
    foreach ($arr as $el){
        $res += $el**count($arr);
    }
    return $value === $res ? true : false;
}

// лучшее
function narcissistic(int $value): bool {
    return $value == array_sum(array_map(function($n) use ($value) {return pow($n, strlen($value));}, str_split($value)));
}

// задание
//radius point

// лучшее
function pointsNumber($r){
    for($i = 0; $i <= $r; $i++) for($j = 1; $j <= $r; $j++) if($i*$i + $j*$j <= $r*$r) $res++;
    return $res*4+1;
}

//задание
//int getScore(1) = return 50;
//int getScore(2) = return 150;
//int getScore(3) = return 300;
//int getScore(4) = return 500;
//int getScore(5) = return 750;

/// мое решение
function get_score(int $n): int {
    $sum = 0;
    while($n>0){
        $sum += $n*50;
        $n--;
    }
    return $sum;
}

/// лучшее
function get_score(int $n): int {
    return 25 * $n * ($n + 1);
}

function get_score(int $n): int {
    return 50 * array_sum(range(1,$n));
}

//задание
//arrayDiff([1,2],[1]) == [2]
//arrayDiff([1,2,2,2,3],[2]) == [1,3]

/// мое решение
function arrayDiff($a, $b) {
    foreach ($b as $el){
        $a = array_filter($a, function ($item) use ($el) {return $item != $el;});
    }
    return array_values($a);
}

/// лучшее
function arrayDiff($a, $b) {
    return array_values(array_diff($a, $b));
}

//задание
//a = 1, b = 2, c = 3
//('taxi', high('man i need a taxi up to ubud'));

/// мое решение
function high($str) {
    $array = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    );
    $arr = explode(' ', $str);
    $res =  array_map(function ($el) use($array){
        return array_sum(array_map(function ($item) use ($array){return array_search($item, $array);}, str_split($el)));
    }, $arr);
    $max = array_keys($res, max($res));
    return $arr[$max[0]];
}

/// лучшее

function high($x) {
    $lengthArray = array_map(function($item) {
        return array_sum(array_map(function($letter) {
            return ord($letter) - 96;
        }, str_split($item)));
    }, explode(' ', $x));

    return explode(' ', $x)[array_keys($lengthArray, max($lengthArray))[0]];
}

function high($str) {
    $a = range('a','z');
    $a = array_flip($a);

    $vv=[];
    $arr = explode(' ', $str);
    foreach ($arr as $key => $value) {
        $aaa=0;
        for ($i=0; $i < strlen($value) ; $i++) {
            $aaa += $a[$value[$i]]+1;
        }
        $vv[$value] = $aaa;
    }
    return array_search(max($vv), $vv);
}

function high($x) {
    $res = array_combine(explode(' ',$x),array_map(function($e){return array_sum(array_map(function($x){return ord($x)-96;},str_split($e)));},explode(' ',$x)));
    return array_search(max($res), $res);
}

//задание nba cup ranking
//$r = "Los Angeles Clippers 104 Dallas Mavericks 88,New York Knicks 101 Atlanta Hawks 112,Indiana Pacers 103 Memphis Grizzlies 112,"
//    . "Los Angeles Lakers 111 Minnesota Timberwolves 112,Phoenix Suns 95 Dallas Mavericks 111,Portland Trail Blazers 112 New Orleans Pelicans 94,"
//    . "Sacramento Kings 104 Los Angeles Clippers 111,Houston Rockets 85 Denver Nuggets 105,Memphis Grizzlies 76 Cleveland Cavaliers 106,"
//    . "Milwaukee Bucks 97 New York Knicks 122,Oklahoma City Thunder 112 San Antonio Spurs 106,Boston Celtics 112 Philadelphia 76ers 95,"
//    . "Brooklyn Nets 100 Chicago Bulls 115,Detroit Pistons 92 Utah Jazz 87,Miami Heat 104 Charlotte Hornets 94,"
//    . "Toronto Raptors 106 Indiana Pacers 99,Orlando Magic 87 Washington Wizards 88,Golden State Warriors 111 New Orleans Pelicans 95,"
//    . "Atlanta Hawks 94 Detroit Pistons 106,Chicago Bulls 97 Cleveland Cavaliers 95,"
//    . "San Antonio Spurs 111 Houston Rockets 86,Chicago Bulls 103 Dallas Mavericks 102,Minnesota Timberwolves 112 Milwaukee Bucks 108,"
//    . "New Orleans Pelicans 93 Miami Heat 90,Boston Celtics 81 Philadelphia 76ers 65,Detroit Pistons 115 Atlanta Hawks 87,"
//    . "Toronto Raptors 92 Washington Wizards 82,Orlando Magic 86 Memphis Grizzlies 76,Los Angeles Clippers 115 Portland Trail Blazers 109,"
//    . "Los Angeles Lakers 97 Golden State Warriors 136,Utah Jazz 98 Denver Nuggets 78,Boston Celtics 99 New York Knicks 85,"
//    . "Indiana Pacers 98 Charlotte Hornets 86,Dallas Mavericks 87 Phoenix Suns 99,Atlanta Hawks 81 Memphis Grizzlies 82,"
//    . "Miami Heat 110 Washington Wizards 105,Detroit Pistons 94 Charlotte Hornets 99,Orlando Magic 110 New Orleans Pelicans 107,"
//    . "Los Angeles Clippers 130 Golden State Warriors 95,Utah Jazz 102 Oklahoma City Thunder 113,San Antonio Spurs 84 Phoenix Suns 104,"
//    . "Chicago Bulls 103 Indiana Pacers 94,Milwaukee Bucks 106 Minnesota Timberwolves 88,Los Angeles Lakers 104 Portland Trail Blazers 102,"
//    . "Houston Rockets 120 New Orleans Pelicans 100,Boston Celtics 111 Brooklyn Nets 105,Charlotte Hornets 94 Chicago Bulls 86,Cleveland Cavaliers 103 Dallas Mavericks 97";


/// мое решение
//net
/// лучшее
function nbaCup($r, $t) {
    if ($t == '') return '';
    $a = array_filter(explode(',', $r), function($v)use($t){return preg_match("/$t \d+( |$)/", $v);});
    if($a == []) return "$t:This team didn't play!";
    $r = ['W' => 0, 'D' => 0, 'L' => 0, 'S' => 0, 'C' => 0, 'P' => 0];
    foreach($a as $k => $v) {
        if (preg_match('/ \d+\.\d+( |$)/', $v)) return "Error(float number):$v";
        $sp = preg_split('/( (?=\d+(?= |$)))|((?<=\d) (?=\w))/', $v);
        $pos = array_search($t, $sp)+1;
        $pos2 = ($pos+2)%4;
        $r['W'] += $sp[$pos] > $sp[$pos2];
        $r['D'] += $sp[$pos] == $sp[$pos2];
        $r['L'] += $sp[$pos] < $sp[$pos2];
        $r['S'] += $sp[$pos];
        $r['C'] += $sp[$pos2];
        $r['P'] += $sp[$pos] > $sp[$pos2] ? 3 : ($sp[$pos] < $sp[$pos2] ? 0 : 1);
    }
    return $t.':W='.$r['W'].';D='.$r['D'].';L='.$r['L'].';Scored='.$r['S'].';Conceded='.$r['C'].';Points='.$r['P'];
}

//задание
//bitsWar([1,5,12]) => "odds win" //1+101 vs 1100, 3 vs 2
//bitsWar([7,-3,20]) => "evens win" //111-11 vs 10100, 3-2 vs 2
//bitsWar([7,-3,-2,6]) => "tie" //111-11 vs -1+110, 3-2 vs -1+2


/// мое решение
function bitsWar($numbers){
    $odd = [];
    $even = [];
    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $even[] = $num < 0 ? -array_sum(str_split(decbin(abs($num)))) : array_sum(str_split(decbin($num)));
        } else {
            $odd[] = $num < 0 ? -array_sum(str_split(decbin(abs($num)))) : array_sum(str_split(decbin($num)));
        }
    }
    $odd_sum = array_sum($odd);
    $even_sum = array_sum($even);

    if ($odd_sum == $even_sum) return 'tie';
    return $odd_sum > $even_sum ? 'odds win' : 'evens win';
}

/// лучшее
function bitsWar(array $numbers):string {
    $score = 0;

    foreach($numbers as $num) {
        $sum = substr_count(decbin(abs($num)), 1);
        $score += (($num % 2) == 0) ? (($num > 0) ? $sum : -$sum) : (($num > 0) ? -$sum : $sum);
    }

    return (!$score) ? 'tie' : (($score > 0) ? 'evens win' : 'odds win');
}


function bitsWar($numbers){
    $odd = 0;
    $even = 0;
    foreach ($numbers as $num) {
        if ($num == 0) {
            continue;
        } elseif ($num % 2 != 0) {
            $odd += substr_count(decbin(abs($num)), '1') * ($num < 0 ? -1 : 1);
        } else {
            $even += substr_count(decbin(abs($num)), '1') * ($num < 0 ? -1 : 1);
        }
    }
    if ($odd == $even) return 'tie';
    return ($odd > $even ? 'odds' : 'evens') . ' win';
}


// задание
//If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

/// мое решение
function solution($number){
    return array_sum(array_map(function($el) {
        return $el%3 === 0 || $el%5 === 0 ? $el : 0;
    }, range(1, $number-1)));
}

/// лучшее
function solution($number){
    return array_sum(array_filter(range(1, $number-1), function ($item) {
        return $item % 3 == 0 || $item % 5 == 0;
    }));
}

//задание
//89 --> 8¹ + 9² = 89 * 1
//695 --> 6² + 9³ + 5⁴= 1390 = 695 * 2
//46288 --> 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51


/// мое решение
function digPow($n, $p) {
    $arr2[] = [];
    foreach (str_split((string)$n) as $i=>$el){
        $arr2[] = intval($el)**($p++);
    }

    $sum = array_sum($arr2);
    if($sum<$n) return -1;
    return $sum%$n == 0 ? $sum/$n : -1;
}

/// лучшее
function digPow($n, $p) {
    $sum = 0;

    foreach(str_split($n) as $number) {
        $sum += $number ** $p++;
    }

    return (($sum % $n) == 0) ?
        ($sum / $n) : -1 ;
}


function digPow($n, $p) {
    $mathSum = 0;
    foreach (str_split((string)$n) as $index => $value) {
        $mathSum += pow($value, $index + $p);
    }
    return (is_int($mathSum/$n)) ? $mathSum/$n : -1;
}

//задание
//[1, 3, 4]  =>  2
//[1, 2, 3]  =>  4
//[4, 2, 3]  =>  1

/// мое решение
function find_number(array $a) {
    return current(array_filter(range(1, count($a)+1), function ($el) use($a) {return !in_array($el, $a);}));
}

/// лучшее
function find_number(array $a): int {
    return ((count($a) + 1) * (count($a) + 2) / 2) - array_sum($a);
}

function find_number(array $a): int {
    return array_sum(range(1, count($a) + 1)) - array_sum($a);
}

// задание
//findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
//findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55


/// мое решение - не решено (жрет память)
function find_uniq($a) {
    sort($a);
    return $a[0] !== $a[1] ? $a[0] : array_pop($a);
}

/// лучшее
function find_uniq($a) {
    sort($a);

    return ($a[0] === $a[1]) ? end($a) : current($a);
}

function find_uniq($a) {
    ini_set('memory_limit', '136M');
    return array_search(1, array_count_values(array_map(function($e){return is_float($e) ? strval($e) : $e;},$a)));
}

function find_uniq($a) {
    foreach ($a as $value) {
        $tab["$value"]++;
    }
    return array_search(1,$tab);
}
// задание Replace With Alphabet Position
//"a" = 1, "b" = 2, etc.
//alphabet_position("The sunset sets at twelve o' clock.")
//"20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11"

// мое решение
 function alphabet_position(string $s)
{
    $alf = range('a', 'z');
    return trim(preg_replace('/ {2,}/', ' ', join(' ', array_map(function ($el) use ($alf) {
        if (array_search(strtolower($el), $alf) > -1) return array_search(strtolower($el), $alf) + 1;
    }, str_split($s)))));
}

// лучшее
function alphabet_position(string $s):string {
    return implode(' ', array_filter(array_map(function($x){
        return array_search($x, str_split('_abcdefghijklmnopqrstuvwxyz'));}, str_split(strtolower($s)))));
}

function alphabet_position(string $s): string {
    preg_match_all('/[a-z]/', strtolower($s), $out);
    return join(' ', array_map(function($ch){return ord($ch) - 96;}, $out[0]));
}

function alphabet_position(string $s): string {
    return implode(' ', array_map(function($c){ return ord($c)-64;}, array_filter(str_split(strtoupper($s)), 'ctype_alpha')));
}