<?php
$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
 ?>
