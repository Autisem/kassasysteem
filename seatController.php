<?php
require 'config.php';
// IF USER TRIES TO USE URL
if ( $_REQUEST['method'] !== 'POST' ){
    header("Location: ../index.php");
}
// IF NOTHIN SELECTED
if ($_POST['seats'] == NULL) {
    header("Location: ../chairselection.php");
}
// #NOTE: CREATE NEW DATABSE
// ID AND SEAT ? POSSIBLY MORE LATER
foreach ($_POST['seats'] as $selected){
    echo $selected . " ";

    //INSERT INTO DATABASE
    $sql        = "INSERT INTO stoelen ( stoel )
    VALUES ( :stoel )";

    //SAFETY REASONS
    $prepare = $db->prepare($sql); // prep
    $prepare->execute([
    ':stoel'        => $selected
    ]);
}
// REDIRECT
header("Location: ../chairselection.php")
?>

