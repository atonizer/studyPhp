<?php
//  Date Formats
// http://php.net/manual/en/datetime.formats.date.php


//$date = new DateTime('2016, September 5');
/*$row = '11. 11. 1971';
$date = DateTime::createFromFormat('d. m. Y', $row);
*/?><!--

<p>The output is: <?php /*echo $date->format('m/d/Y') */?></p>-->

<?php

$dvone = new DateTime('August 1, 1972');
$spike = new DateTime('August 13, 1970');

// Who is older?

if ($dvone < $spike) {
    echo '<p>D-Von is older than Spike';
} else {
    echo '<p>Spike is older than D-Von</p>';
}

// Age Difference

$diff = $dvone->diff($spike);

echo $diff->format("<p>There is %y years, and %m months and %d days between Spike and D-von</p>")

?>


