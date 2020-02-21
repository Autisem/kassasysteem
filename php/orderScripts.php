<?php
require 'dbconnect.php';


//Insert order into the order table with supplyed id, etc etc.
function CreateOrder(PDO $db,$owner, $film, $time){
$orderSQL = "INSERT INTO reserveringen (owner, film, day_and_time) VALUES (?, ?, ?)";
$orderSTMT = $db->prepare($orderSQL);
$orderSTMT->execute([$owner,$film,$time]);
}
?>
