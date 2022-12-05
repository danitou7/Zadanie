<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updatePopular(
        $_POST['id'],
        $_POST['name'],
        $_POST['text'],
        $_POST['fotka1'],
        $_POST['fotka2'],
        $_POST['fotka3']
    );

    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}