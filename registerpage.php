<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="wachtwoord">
      <h1 class="text-center">Registreren</h1>
      <p class="text-center" style="width: 360px; font-size: 1.1rem;"><strong>Maak hier een account aan om gebruik te maken van Bioscoop AMO.</strong><br>
        Je kan dan makkelijk terug zien welke tickets je hebt gekocht en wat je aankoopgeschiedenis is. Ook kan je beheren welke bioscopen favoriet zijn.</p>
      <form class="register-wrapper" action="login_systeem/aanmelden/aanmelden.php" method="post">
        <div class="voornaam-input" id="voornaam-input">
          <label for="voornaam-input" id="voornaam-input">Voornaam:</label>
          <input type="text" name="voornaam-input" id="voornaam-input">
        </div>
        <div class="achternaam-input" id="achternaam-input">
          <label for="achternaam-input" id="achternaam-input">Achternaam:</label>
          <input type="text" name="achternaam-input" id="achternaam-input">
        </div>
        <div class="geboortedatum-input" id="geboortedatum-input">
          <label for="geboortedatum-input" id="geboortedatum-input">Geboortedatum:</label>
          <input type="date" name="geboortedatum-input" id="geboortedatum-input">
        </div>
        <div class="woonplaats-input" id="woonplaats-input">
          <label for="woonplaats-input" id="woonplaats-input">Woonplaats:</label>
          <input type="text" name="woonplaats-input" id="woonplaats-input">
        </div>
        <div class="straatnaam-input" id="straatnaam-input">
          <label for="straatnaam-input" id="straatnaam-input">Straatnaam:</label>
          <input type="text" name="straatnaam-input" id="straatnaam-input">
        </div>
        <div class="huisnummer-input" id="huisnummer-input">
          <label for="huisnummer-input" id="huisnummer-input">Huisnummer:</label>
          <input type="text" name="huisnummer-input" id="huisnummer-input">
        </div>
        <div class="postcode-input" id="postcode-input">
          <label for="postcode-input" id="postcode-input">Postcode:</label>
          <input type="text" name="postcode-input" min="0" max="6" id="postcode-input">
        </div>
        <div class="telefoonnummer-input" id="telefoonnummer-input">
          <label for="telefoonnummer-input" id="telefoonnummer-input">Telefoonnummer:</label>
          <input type="text" name="telefoonnummer-input" id="telefoonnummer-input">
        </div>
        <div class="email-input" id="email-input">
          <label for="email-input" id="email-input">Email addres:</label>
          <input type="email" name="email-input" id="email-input">
        </div>
        <div class="email-two-input" id="email-two-input">
          <label for="email-two-input" id="email-two-input">Herhaaling Email:</label>
          <input type="email" name="email-two-input" id="email-two-input">
        </div>
        <div class="wachtwoord-input" id="wachtwoord-input">
          <label for="wachtwoord-input" id="wachtwoord-input">Wachtwoord:</label>
          <input type="password" name="wachtwoord-input" id="wachtwoord-input">
        </div>
        <div class="wachtwoord-two-input" id="wachtwoord-two-input">
          <label for="wachtwoord-two-input" id="wachtwoord-two-input">Herhaaling Wachtwoord:</label>
          <input type="password" name="wachtwoord-two-input" id="wachtwoord-two-input">
        </div>
        <input type="submit" name="submit" value="Aanmelden" class="btn btn-primary btn-block btn-large">
      </form>
    </div>
</main>

<footer class="footer">

<?php require('footer.php'); ?>

<?php
/*
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
      $result->execute([':email' => $email,
                        ':telefoonnummer' => $telefoonnummer,
                        ':postcode' => $postcode,
                        ':huisnummer' => $huisnummer,
                        ':straatnaam' => $straatnaam,
                        ':woonplaats' => $woonplaats,
                        ':geboortedatum' => $geboortedatum,
                        ':achternaam' => $achternaam,
                        ':voornaam' => $voornaam,
                        ':wachtwoord' => sha1($wachtwoord)
                        ]);

      header("Location: ../login.html");
    }
  }
}
*/
?>
