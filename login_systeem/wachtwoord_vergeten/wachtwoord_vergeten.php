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

  echo "<p>Er is een mail naar u geestuurd waar via u uw wachtwoord kan aanpassen.</p>";
  sleep(3);
  // time_sleep_until(microtime(true)+10.0));
  header('Location: ../../index.php');
}
else {
  echo "U hebt geen geregistreerd email adress ingevoerd";
}
 ?>
