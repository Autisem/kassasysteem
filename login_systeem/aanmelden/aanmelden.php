<?php
$voornaam = $_POST["voornaam-input"];
$achternaam = $_POST["achternaam-input"];
$geboortedatum = $_POST["geboortedatum-input"];
$woonplaats = $_POST["woonplaats-input"];
$straatnaam = $_POST["straatnaam-input"];
$huisnummer = $_POST["huisnummer-input"];
$postcode = $_POST["postcode-input"];
$tefoonnummer = $_POST["telefoonnummer-input"];
$email = $_POST["email-input"];
$emailh= $_POST["email-two-input"];
$wachtwoord = $_POST["wachtwoord-input"];
$wachtwoordh = $_POST["wachtwoord-two-input"];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if (filter_var($emailh, FILTER_VALIDATE_EMAIL)) {
    if ($email == $emailh) {
      if ($wachtwoord == $wachtwoordh) {
        // code...
      }
      else {
        // code...
      }
    }
    else {
      // code...
    }
  }
  else {
    // code...
  }
}
else {
  // code...
}
 ?>
