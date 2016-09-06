<?php

$utcDateTime = new DateTime('2016-09-06 14:01', new DateTimeZone('UTC'));

$localDateTime = clone $utcDateTime;

$localDateTime->setTimezone(new DateTimeZone('America/New_York'));

?>

<p>The UTC date/time is: <?= $utcDateTime->format("Y-m-d H:i:d") ?></p>
<p>The New York date/time is: <?= $utcDateTime->format("Y-m-d H:i:d") ?></p>
