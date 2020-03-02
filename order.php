<?php

require 'header.php';
require 'php/orderScripts.php';
echo '<form action="" method="post">Movie ID:<input type="text" name="name">
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
$QuaryGetOrders = "SELECT reserveringen.id,  gegevens.voornaam, reserveringen.film, films.name as movieName
                  FROM reserveringen
                  INNER JOIN gegevens ON reserveringen.owner = gegevens.id
                  INNER JOIN films ON reserveringen.film = films.id";
$prep = $db->query($QuaryGetOrders);
$result = $prep->fetchAll(PDO::FETCH_ASSOC);
echo '<table>';
foreach($result as $item ){
echo '<tr>'.
'<td>'.  $item['id'].'</td>'.
'<td>'.  $item['voornaam'].'</td>'.
'<td>'.  $item['movieName'].'</td>'
.'</tr>';
}
echo '</table>';
require 'footer.php';
?>
