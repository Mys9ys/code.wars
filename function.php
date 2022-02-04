<?php

function mys9ys_debug($arr, $text ='', $exit = false){
    echo '<pre>';
    print_r($text);
    echo '<br>';
    print_r($arr);
    echo '</pre>';
    if($exit) exit;
}