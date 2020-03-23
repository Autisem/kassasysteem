<?php
require ('config.php');
require ('../php/sendmail.php');
session_name("ingelogd");
session_start();


$email = $_POST['email-input'];
$wachtwoord =$_POST['password-input'];
$_SESSION['email-input'] = $email;
echo session_save_path();
$password = $_POST['password-input'];
$sql = "SELECT * FROM gegevens WHERE wachtwoord = :passwordchek";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':passwordchek' => sha1($wachtwoord)
]);
$items = $prepare->fetch(PDO::FETCH_ASSOC);

$mail = $_POST['email-input'];
$sql = "SELECT gegevens.email, gegevens.wachtwoord, gegevens.id, gegevens.voornaam, gegevens.achternaam FROM gegevens WHERE email= :mailchek";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':mailchek' => $email
]);
$item = $prepare->fetch(PDO::FETCH_ASSOC);

$_SESSION['fName'] = $item['voornaam'];
$_SESSION['lName'] = $item['achternaam'];
$_SESSION['id'] = $item['id'];

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
        $stmt = $con->prepare("SELECT * FROM gegevens WHERE id = :id");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute([':id' => $id]);
        $result = $stmt->get_result();
    	$user = $result->fetch_object();

    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->password ) ) {
    		$_SESSION['user_id'] = $user->ID;
    	}
    }
}

echo $_SESSION['email-input'];

header("Location: ../index.php");
 ?>
