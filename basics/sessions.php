<?php
// SESSIONS

session_start();
session_regenerate_id(true);
$_SESSION['user'] = 'John';

if (isset($_REQUEST['destroy'])){
    session_destroy();
}
?>
<a href="sessions2.php">Sessions2</a>

<a href="?destroy">Destroy</a>
