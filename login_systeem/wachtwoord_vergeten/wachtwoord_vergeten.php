<?php
$email = $_POST["email"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // code...
}
else {
  // code...
}
 ?>
