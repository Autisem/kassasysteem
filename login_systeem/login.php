<?php
$email = $_POST["email"];
$wachtwoord =$_POST["password"];

$sql = "SELECT * FROM gegevens";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if ($email == ) {
    // code...
  }
}
else {
  // code...
}

 ?>
