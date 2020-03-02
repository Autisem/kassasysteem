<?php
require ('config.php');

$email = $_POST['email'];
$wachtwoord =$_POST['password'];

$password = $_GET['wachtwoord'];
$sql = "SELECT * FROM gegevens WHERE wachtwoord= :passwordchek";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':passwordchek' => sha1($wachtwoord)
]);
$items = $prepare->fetch(PDO::FETCH_ASSOC);

$mail = $_GET['email'];
$sql = "SELECT gegevens.email, gegevens.wachtwoord FROM gegevens WHERE email= :mailchek";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':mailchek' => $email
]);
$item = $prepare->fetch(PDO::FETCH_ASSOC);



 ?>
