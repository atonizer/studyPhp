<?php

function greeting($name){
    if($name == 'John Doe'){
        $phrase = "Hello, $name!";
    }
    else{
        $phrase = 'Hello, Stranger';
    }
    return $phrase;
}


$greeting=greeting('John Doe');

echo $greeting;

?>