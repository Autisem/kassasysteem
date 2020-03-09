<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

  <main>
    <div class="wrapper">
      <div class="login">
       <h1>Login</h1>
        <form  action="login_systeem/login.php"method="POST">
            <input type="text" name="email-input" placeholder="email" required="required" />
            <input type="password" name="password-input" placeholder="Password" required="required" />
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </form>
        <p class="account-info">You don't have an account yet. Don't worry just sign up <a href="registerpage.php">here!</a></p>
     </div>
        <div class="register">

        </div>
    </div>
  </main>

<?php require('footer.php'); ?>
