<?php

require 'header.php';
require 'php/dbsuit.php';
$datetime = date_create()->format('Y-m-d H:i:s');

CreateOrder($db, 1,"Spiderverse", $datetime);
echo "made order!";
require 'footer.php';
?>
