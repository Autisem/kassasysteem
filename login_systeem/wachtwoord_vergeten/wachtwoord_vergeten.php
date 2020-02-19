<?php
require ('../config.php');

$email = $_POST["email"];

$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // code...
  echo "Er is een E-mail naar u verstuurd waarin u uw wachtwoord kunt aanpassen";
}
else {
  echo "U hebt geen geregistreerd email adress ingevoerd";
}
 ?>
