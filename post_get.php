<?php
// POST, GET, REQUEST
if (isset($_REQUEST['check'])){
//    echo $_POST['name'];
//    echo $_POST['message'];
    echo strip_tags($_REQUEST['name']);
    echo htmlentities($_REQUEST['message']);
}
//
//echo $_REQUEST['check'];
//echo '<br />';
//echo $_REQUEST['age'];
?>

<form action="post_get.php?check=1" method="post">
    Name:<input type="text" name="name" /><br />
    Message:
    <textarea name="message"></textarea><br />
    <input type="submit" value="Send Message"/>
</form>
