<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="flexcent">
    <div class="login">
      <form class="login-wrapper" action="login_systeem/login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="email-input" placeholder="e-mail address" required="required" />
        <input type="password" name="password-input" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
      <p class="account-info">Have you forgotten your password, Don't worry just click <a href="wachtwoord_vergeten.php">here!</a> to find it</p>
    </div>
  </div>
</main>

<footer class="footer">

  <?php require('footer.php'); ?>
