<?php

for($i = 0; $i <= 10; $i++){
    echo $i . '<br />';
}
?>
<br/>
<?php
$i = 0;
while ($i <= 10){
    echo $i . '<br />';
    ++$i;
}

?>
    <br/>
<?php

$cars1 = array(
    'good' => 'BMW',
    'nice' => 'Mercedes',
    'best' => 'Ferrari',
    'works' => 'Volkswagen',
    'old' => array(
        'Gullwing',
        'Bel Air',
        'Countach',
        'Continental',
        'Riviera'
)
);
foreach ($cars1 as $key => $value){
    if (is_array($value)){
        foreach($value as $k => $v){
            echo '&nbsp;&nbsp;' . $k .' '. $v . '<br />';
        }
    }
    else{
        echo $key . ' ' . $value .'<br />';
    }

}
?>