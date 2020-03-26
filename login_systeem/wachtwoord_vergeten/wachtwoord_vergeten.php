<?php
require ('../config.php');
require ('../../php/sendmail.php');
require "C:/xampp/htdocs/School/project/periode3/kassasysteem/vendor/autoload.php";

$email = $_POST["email"];

$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  SendMail($email, "het werkt", "Wachtwoord vergeten", "mailbody", "Deze email is niet succes vol ingeladen", $attachment);

  //persoon naam kopelen aan emial $naamUser

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

  echo '<script type="../login.js">alert("om uw registratie te voltooien is er een bevestigingsmail naar u gestuurd");</script>';
  header("Location: ../index.php");
}
else {
  echo "U hebt geen geregistreerd email adress ingevoerd";
}
 ?>
