<?php
require ('../config.php');
require ('../../php/sendmail.php');

$email = $_POST["email"];

$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $sqlt = "SELECT * FROM loginkassasysteem WHERE email = :email";
  $queryt = $db->prepare($sqlt);
  $preparet->execute([
    ':email' => $email
  ]);

  $itemt = $preparet->fetch(PDO::FETCH_ASSOC);


  $mailAdress = $email;
  $userName = $itemt['voornaam'];
  $subject = "Wachtwoord evrgeten Bioscoop";
  $mailBody = "placeholder";
  $altMailBody = "de email kon niet geladen worden"

  /* The variables:
  * $mailAdress - you should put the mail adress of the person you want to send the mail to here
  * $userName - this should be the name of the person the mail will be send to
  * $subject - this is the title of the mail
  * $mailBody - This should be the content of the mail, you can use html here if you wish to
  * $altMailBody - this will be used in case the normal mail body can not be loaded, this should be in a plain text format
  * $attachment - this is optional and can be left empty, this will add a file or image to the mail as an attachment
  */
  echo "Er is een E-mail naar u verstuurd waarin u uw wachtwoord kunt aanpassen";
}
else {
  echo "U hebt geen geregistreerd email adress ingevoerd";
}
 ?>
