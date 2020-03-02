<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

  <main>
    <div class="wrapper">
        <form class="register-wrapper" action="">
          <h2>Registreren bij bioscoop AMO</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates dolor nobis veniam quod cumque ratione nostrum illum incidunt dolore, architecto earum vitae, pariatur sapiente reiciendis laboriosam non ducimus vero animi!</p>
          <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="usrnm">
          </div>
          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
          </div>
          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Repeat Email" name="email">
          </div>
          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="psw">
          </div>
          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Repeat Password" name="psw">
          </div>

          <button type="submit" class="btn">Register</button>
        </form>
    </div>
  </main>

<?php require('footer.php'); ?>
