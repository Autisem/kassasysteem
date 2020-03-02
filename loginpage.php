<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

  <main>
    <div class="wrapper">
      <div class="login">
       <h1>Login</h1>
        <form method="post">
            <input type="text" name="u" placeholder="Username" required="required" />
            <input type="password" name="p" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </form>
        <p class="account-info">You don't have an account yet. Don't worry just sign up <a href="registerpage.php">here!</a></p>
     </div>
        <div class="register">

        </div>
    </div>
  </main>

<?php require('footer.php'); ?>
