<?php
require ('../config.php');

$email = $_POST["email"];

$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // $sqlt = "SELECT * FROM loginkassasysteem WHERE email = :email";
  // $queryt = $db->prepare($sqlt);
  // $preparet->execute([
  //   ':email' => $email
  // ]);
  //
  // $itemt = $preparet->fetch(PDO::FETCH_ASSOC);
  //
  //
  // $mailAdress = $email;
  // $userName = $itemt['voornaam'];
  // $subject = "Wachtwoord vergeten Bioscoop";
  // $mailBody = "placeholder";
  // $altMailBody = "de email kon niet geladen worden"

  echo "Er is een E-mail naar u verstuurd waarin u uw wachtwoord kunt aanpassen";
}
else {
  echo "U hebt geen geregistreerd email adress ingevoerd";
}
 ?>
