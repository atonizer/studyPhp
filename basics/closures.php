<?php
$name = 'James';

$sayhi = function () use($name) {
    echo 'Hi there '. $name .'!</br>';
};

$sayhi();
?>