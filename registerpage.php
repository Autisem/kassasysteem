<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

  <main>
    <div class="wrapper">
        <form class="register-wrapper" action="">
          <h2>Registreren bij bioscoop AMO</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates dolor nobis veniam quod cumque ratione nostrum illum incidunt dolore, architecto earum vitae, pariatur sapiente reiciendis laboriosam non ducimus vero animi!</p>
          <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="voornaam-input">
          </div>
          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email-input">
          </div>
          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Repeat Email" name="email-input">
          </div>
          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="password-input">
          </div>
          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Repeat Password" name="password-input">
          </div>

          <button type="submit" name="submit" class="btn">Register</button>
        </form>
    </div>
  </main>

<?php require('footer.php'); ?>

<?php
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

      header("Location: ../login.html");
    }
