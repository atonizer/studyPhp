<?php

session_start();
session_regenerate_id(true);
echo $_SESSION['user'];
?>

<a href="sessions.php">Sessions</a>
