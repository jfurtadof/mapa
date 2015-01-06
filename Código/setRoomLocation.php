<?php
require('core.php');

$tower = $_POST["tower"];
$floor = $_POST["floor"];
$block = $_POST["block"];


$s = "SELECT * FROM rooms WHERE tower = '$tower' AND floor = '$floor' AND block = '$block'";
$q = mysql_query($s);
$r = mysql_num_rows($q);
$dados = mysql_fetch_assoc($q);

echo $dados["pos_x"];
echo ",";
echo $dados["pos_y"];
echo ",";
echo $dados["zoom"];

?>
