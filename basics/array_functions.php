<?php

$names = array(
    'John',
    'Joan',
    'Jean',
    'Jessy',
    'Jacob',
    'Joshua',
    'Julia',
    'Jayden',
    'Jasmine',
    'Jake',
    'James',
    'Joseph',
    'Julian',
    'Jeffrey',
    'Jackson',
    'Jasper',
    'Jonah',
    'Jude',
    'Jose',
    'Jesus'
);

//var_dump(array_keys($names));

/*foreach (array_keys($names) as $name){
    echo "Hello, $name</br>";
}*/

function print_info($value, $key){
    echo "$key is a $value</br>";
}

array_walk($names, 'print_info');
?>