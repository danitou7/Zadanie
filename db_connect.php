<?php
include_once "db.php";

use portalove\DB;

$db = new DB("localhost", "zadanie", "root", "", '');

global $db;

session_start();


