<?php

require 'header.php';
require 'php/dbconnect.php';
echo '<form action="" method="post">Movie ID:<input type="text" name="name">
      User ID:<input type="text" name="user">
      Date: <input type="date" name="time">
      <input type="submit">
      </form>';

if(isset($_POST['name'])){
$datestro = strtotime($_POST['time']);
$datetime = date('Y-m-d H:i:s', $datestro);
$film = $_POST['name'];
$owner = $_POST['user'];

$sql = "SELECT id, name FROM films WHERE name = :name";
$quary = $db->prepare($sql);
$quary->execute([':name' => $film]);
$item = $quary->fetch(PDO::FETCH_ASSOC);

$movieName = $item['id'];

$orderSQL = "INSERT INTO reserveringen (owner, film, day_and_time) VALUES (?, ?, ?)";
$orderSTMT = $db->prepare($orderSQL);
$orderSTMT->execute([$owner,$movieName,$datetime]);


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
'<td>'.  $item['id'].'|||</td>'.
'<td>'.  $item['voornaam'].'|||</td>'.
'<td>'.  $item['movieName'].'</td>'
.'</tr>';
}
echo '</table>';
require 'footer.php';
?>
