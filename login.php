<?php require 'header.php'; ?>


<form action="php/login.php" method="post">
Email:<input type="text" name="email">
Password:<input type="text" name="password">
<input type="submit">
</form>
<?php
$sql = "SELECT gegevens.id, gegevens.email FROM bioscoop WHERE gegevens.email =  :email AND gegevens.wachtwoord = :password ";

?>



<?php require 'footer.php'; ?>
