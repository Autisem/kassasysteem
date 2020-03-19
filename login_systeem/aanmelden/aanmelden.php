<?php
require ('../config.php');
require ('../../php/sendmail.php');

MailTest();
$voornaam = $_POST["voornaam-input"];
$achternaam = $_POST["achternaam-input"];
$geboortedatum = $_POST["geboortedatum-input"];
$woonplaats = $_POST["woonplaats-input"];
$straatnaam = $_POST["straatnaam-input"];
$huisnummer = $_POST["huisnummer-input"];
$postcode = $_POST["postcode-input"];
$telefoonnummer = $_POST["telefoonnummer-input"];
$email = $_POST["email-input"];
$emailh = $_POST["email-two-input"];
$wachtwoord = $_POST["wachtwoord-input"];
$wachtwoordh = $_POST["wachtwoord-two-input"];

$sqlAsk = "SELECT * FROM gegevens WHERE email=:email AND wachtwoord=:wachtwoord";
$query = $db->prepare($sqlAsk);
$query->execute([':email' => $email,':wachtwoord' => sha1($wachtwoord)]);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if(!(empty($items))){
  echo "The gebruiker is all regristeerd";
  var_dump($items);
  exit();
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($emailh, FILTER_VALIDATE_EMAIL)) {
  if ($email == $emailh) {
    if ($wachtwoord == $wachtwoordh) {
    $sql = "
        INSERT INTO gegevens
        (
            voornaam,
            achternaam,
            geboortedatum,
            woonplaats,
            straatnaam,
            huisnummer,
            postcode,
            telefoonnummer,
            email,
            wachtwoord
        )
        VALUES
        (
          :voornaam,
          :achternaam,
          :geboortedatum,
          :woonplaats,
          :straatnaam,
          :huisnummer,
          :postcode,
          :telefoonnummer,
          :email,
          :wachtwoord
          )
      ";
      $result = $db->prepare($sql);
      $result->execute([':email' => $email,':telefoonnummer' => $telefoonnummer,':postcode' => $postcode,':huisnummer' => $huisnummer,':straatnaam' => $straatnaam,
                        ':woonplaats' => $woonplaats,':geboortedatum' => $geboortedatum,':achternaam' => $achternaam,':voornaam' => $voornaam,':wachtwoord' => sha1($wachtwoord)]);

      header("Location: ../../loginpage.php");
    }
    else {
      echo "Uw wachtwoord herhaaling kwam niet overeen";
    }
  }
  else {
    echo "Uw email adres herhaaling kwam niet overeen";
  }
}
else {
  echo "U hebt geen geldig email adres ingevoerd";
}
 ?>
