<?php

function answer(){
    return 33;
}

function add_up($a, $b){
    return $a + $b;
}

$func = 'add_up';

$num = $func(10, 20);

echo $num;

?>