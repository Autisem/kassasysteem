<?php

require 'header.php';
require 'php/dbsuit.php';
echo '<form action="" method="post">Movie name:<input type="text" name="name">
      User ID:<input type="text" name="user">
      Date: <input type="date" name="time">
      <input type="submit">
      </form>';
if(!isset($_POST)){
$datestro = strtotime($_POST['time']);
$datetime = date('Y-m-d H:i:s', $datestro);

CreateOrder($db, $_POST['user'],$_POST['name'], $datetime);
echo "made order!";
}
require 'footer.php';
?>
