<?php
ob_start();
session_start();

//database credentials
define('DBHOST','localhost');
define('DBUSER','dev');
define('DBPASS','ghbdtn');
define('DBNAME','blog');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('Europe/London');

?>