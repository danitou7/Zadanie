<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

$popular = $db->getPopular($_GET['id'])[0];
?>

<form method="post" action="update_continent.php">
    Name: <br>
    <input type="text" name="name" value="<?php echo $popular['nazov']; ?>"><br>
    Text: <br>
    <input type="text" name="text" value="<?php echo $popular['text']; ?>"><br>
    Fotka1: <br>
    <input type="text" name="fotka1" value="<?php echo $popular['fotka1']; ?>"><br>
    Fotka2: <br>
    <input type="text" name="fotka2" value="<?php echo $popular['fotka2']; ?>"><br>
    Fotka3: <br>
    <input type="text" name="fotka3" value="<?php echo $popular['fotka3']; ?>"><br>
    <br>
    <input type="hidden" name="id" value="<?php echo $popular['id']; ?>"><br>
    <input type="submit" name="submit" value="Update">
</form>