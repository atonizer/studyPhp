<?php
//
//$name = 'User';
//
//echo 'Hello ' . $name . ', and have a nice day';
//
//$name2 = $name;
//
//echo $name2;
//
//$name3 = 'John';
//
//echo $name3;
//
//?>
<!---->
<?php
//// arrays
//
//// Key=>Value
//
//$cars = array(
//    'BMW',
//    'Mercedes',
//    'Ferrari',
//    'Volkswagen'
//);
//
//echo $cars[0];
//
//$cars1 = array(
//    'good' => 'BMW',
//    'nice' => 'Mercedes',
//    'best' => 'Ferrari',
//    'works' => 'Volkswagen'
//);
//
//echo $cars1['nice'];
//?>
<?php

if (isset($_REQUEST['check'])){
    echo $_POST['car'];
}

?>


<form action="index.php?check" method="post">
Car: <input type="text" name="car"/><br />
    <input type="submit" value="Show car" />
</form>
