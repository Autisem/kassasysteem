<?php
require ('config.php');

$email = $_POST['email'];
$wachtwoord = $_POST['password'];

$sql = "SELECT * FROM gegevens WHERE wachtwoord= :passwordchek AND email = :email";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':passwordchek' => sha1($wachtwoord),
  ':email'        => $email
]);
$user = $prepare->fetch(PDO::FETCH_ASSOC);

if (!$user) {
  exit('User password combination does not exist...');
}

$_SESSION['user'] = $user;



 ?>
 <!-- $_SESSION -->
