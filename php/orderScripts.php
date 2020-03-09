<?php
require 'dbconnect.php';


//Insert order into the order table with supplyed id, etc etc.
function CreateOrder(PDO $db,$owner, $film, $time){
$sql = "SELECT id, name FROM films WHERE name = :name";
$quary = $db->prepare($sql);
$quary = $items->execute([':name' => $film]);
$item = $quary->fetch(PDO::FETCH_ASSOC);

$movieName = $item['id'];

$orderSQL = "INSERT INTO reserveringen (owner, film, day_and_time) VALUES (?, ?, ?)";
$orderSTMT = $db->prepare($orderSQL);
$orderSTMT->execute([$owner,$movieName,$time]);
}
?>
