<?php
//  Date Formats
// http://php.net/manual/en/datetime.formats.date.php


//$date = new DateTime('2016, September 5');
$row = '11. 11. 1971';
$date = DateTime::createFromFormat('d. m. Y', $row);
?>

<p>The output is: <?php echo $date->format('m/d/Y') ?></p>
