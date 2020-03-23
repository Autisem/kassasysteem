<?php
require 'dbconnect.php';
session_start();
    $query = "INSERT INTO reserveringen (owner, film, day_and_time) VALUES (:owner, :film, :date)";
    $statement = $db->prepare($query);
    $statement->execute([':owner' => $_SESSION['id'], ':film'=>$_POST['id'], ':date' => $_POST['time']]);
    header('Location: ../index.php');
?>
