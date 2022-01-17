<?php
$minion = array(
    'а'=>'амо',
    'б'=>'ф',
    'в'=>'д',
    'г'=>'х',
    'д'=>'ц',
    'е'=>'уйо',
    'ё'=>'уйо',
    'ж'=>'м',
    'з'=>'д',
    'и'=>'ара',
    'й'=>'уна',
    'к'=>'б',
    'л'=>'р',
    'м'=>'к',
    'н'=>'с',
    'о'=>'ута',
    'п'=>'л',
    'р'=>'з',
    'с'=>'ж',
    'т'=>'в',
    'у'=>'ока',
    'ф'=>'н',
    'х'=>'г',
    'ц'=>'ш',
    'ч'=>'т',
    'ш'=>'п',
    'щ'=>'ц',
    'ь'=>'айа',
    'ы'=>'ела',
    'ъ'=>'ана',
    'э'=>'або',
    'ю'=>'едо',
    'я'=>'май',
);

$rus_str = 'Президент Путин: участвовавшие в беспорядках в Казахстане боевики прошли горячие точки';
$result = [];

$first = explode(' ', $rus_str);

foreach ($first as $word){

    $chars = [];
//    $char = mb_str_split($word);
    $char = preg_split('//u',$word,-1,PREG_SPLIT_NO_EMPTY);
    foreach ($char as $item){
        $chars[] = $minion[mb_strtolower($item)];
    }
    $result[] = implode('', $chars);
}

var_dump(implode(' ', $result));


$x = 4;
$y = 2;
$result = '$x+$y';
echo $result;





//$now_d => intval(date('j'));
//$now_m = intval(date('n'));
//$period = array(
//    'start' => array('d'=>27, 'm'=>12),
//    'end' => array('d'=>9, 'm'=>1),
//);
//$ny_flag = false;
//if(($now_m == $period['start']['m'] && $now_d>= $period['start']['d']) || ($now_m == $period['end']['m'] && $now_d<= $period['end']['d'])){
//    $ny_flag =  true;
//}
////var_dump('$now_d', $now_d, '$now_m', $now_m);
//var_dump($now_d == '27-12');
//function high($str) {
//    $array = array(
//        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
//        's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
//    );
//    $arr = explode(' ', $str);
//    $res =  array_map(function ($el) use($array){
//        return array_sum(array_map(function ($item) use ($array){return array_search($item, $array);}, str_split($el)));
//    }, $arr);
//    $max = array_keys($res, max($res));
//    return $arr[$max[0]];
//}

//var_dump('high',high('man i need a taxi up to ubud'));
//var_dump('high',high('what time are we climbing up the volcano'));
//var_dump('res',narcissistic(371));
//var_dump('res',narcissistic(11));
//var_dump(ucfirst('tre'));
