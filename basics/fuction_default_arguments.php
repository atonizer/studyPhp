<?php

function get_info($name, $title= Null){
    if($title){
        echo "$name has arrived, he's wit us as a $title";
    } else{
        echo "$name has arrived. Welcome!";
    }
}

get_info('James', 'spy');

?>