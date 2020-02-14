<?php

require 'header.php';
require 'php/BarCodeGen.php';
echo '<form method="post" action=""><input type="text" name="code">
      <input type="submit">
      </form>';
if(!empty($_POST['code'])){
echo GetBar($_POST['code']);
}
require 'footer.php';
?>
