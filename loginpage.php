<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="wrapper">
    <div class="login">
      <h1>Login</h1>
      <form action="login_systeem/login.php" method="post">
        <input type="text" name="email-input" placeholder="e-mail address" required="required" />
        <input type="password" name="password-input" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
      <p class="account-info">Have you forgotten your password, Don't worry just click <a href="wachtwoord_vergeten.php">here!</a> to find it</p>
    </div>
    <div class="register">

    </div>
  </div>
</main>

<footer class="footer">

  <?php require('footer.php'); ?>