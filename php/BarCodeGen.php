<?php
require '../vendor/autoload.php';


echo '<form method="post" action=""><input type="text" name="code">
      <input type="submit">
      </form>';

echo GetBar($_POST['code']);

function GetBar($code){
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
if(isset($code)){
return $generator->getBarcode($code, $generator::TYPE_CODE_128);
}
}


?>
