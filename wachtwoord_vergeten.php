<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="wachtwoord">
      <form class="login-wrapper" action="login_systeem/wachtwoord_vergeten/wachtwoord_vergeten.php" method="post">
        <h1 class="text-center">Wachtwoord vergeten?</h1>
        <p>Wat jammer dat u u wachtwoord bent veregeten maar dat is geen probleem.<br> Als u hier onder u email adress invult dan sturen wij u een email waar via u u wachtwoord kunt veranderen</p>
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
