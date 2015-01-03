<?php
require('core.php');

if (isset($_POST['torreValue'])){
$torreValue = $_POST["torreValue"];
//echo $torreValue;
$query=mysql_query("SELECT * FROM rooms WHERE typology = 'classroom' AND torre = '$torreValue' ");
$dados=mysql_fetch_array($result);
//echo '<div id="pop-search-room-classroom" style="background-color:red" class="pop-search">HUGAHUGA</div>';
 echo "oioioi";
 echo "ffff";
//$nome=$dados[name];

//if (mysql_num_rows($query) > 0){
//  echo "oioioi";
//} else {
//  echo "nonono";
//}
//echo $nome;
//echo $torreValue;

//while($r = mysql_fetch_assoc($result)){
//  echo "oi";
//}

//echo "oioio";
}
?>
