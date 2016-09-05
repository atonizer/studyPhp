<?php

$phrase = "This is a phrase";

$len = strlen($phrase);
//echo $len;

//echo substr($phrase, 3);

$start = strpos($phrase, 'is');
echo substr($phrase, $start);


?>
