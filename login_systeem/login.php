<?php
$email = $_POST["email"];
$wachtwoord =$_POST["password"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // code...
}
else {
  // code...
}

 ?>
