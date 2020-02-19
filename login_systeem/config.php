<?php
$dbHost = '127.0.0.1';
$dbName = 'loginkassasysteem';
$dbUser = 'root';
$dbPass = '';

$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
 ?>
