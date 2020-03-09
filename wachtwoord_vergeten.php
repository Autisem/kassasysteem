<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="wrapper">
    <div class="wachtwoord">
      <h1 class="text-center">Wachtwoord vergeten?</h1>
      <p>Wat jammer dat u u wachtwoord bent veregeten maar dat is geen probleem.<br> Als u hier onder u email adress invult dan sturen wij u een email waar via u u wachtwoord kunt veranderen</p>
      <form class="" action="wachtwoord_vergeten.php" method="post">
        <div class="email-input" id="email-input">
          <label for="email" id="email-input">Email addres:</label>
          <input type="email" name="email" id="email-input">
        </div>
        <input type="submit" name="submit" value="verzenden" class="btn btn-primary btn-block btn-large">
      </form>
    </div>
  </div>
</main>

<footer class="footer">

  <?php require('footer.php'); ?>