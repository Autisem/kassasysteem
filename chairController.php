<?php
session_start();
require 'login_systeem/config.php';
// IF NOTHIN SELECTED
if ($_POST['seats'] == NULL) {
    header("Location: ../chairselection.php");
}
// INSTALL THE stoelen.sql, OTHERWISE IT WONT HAVE A DATABASE TO PULL AND GO TO
// ID AND SEAT ? POSSIBLY MORE LATER
$i = 1;
foreach ($_POST['seats'] as $selected){
    $_SESSION['selectedSeat[' . $i . ']'] = $selected;
    $i++;
    //INSERT INTO DATABASE
    // $data = [
    //     'stoel' => $selected,
    //     'checked' => "checked"
    // ];
    // $sql = "UPDATE stoelen SET stoel=:stoel, checked=:checked WHERE stoel=:stoel";
    // $prep= $db->prepare($sql);
    // $prep->execute($data);
}
// REDIRECT
  header("Location: ordering.php")
?>
