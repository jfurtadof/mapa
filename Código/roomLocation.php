<?php
require('core.php');

$room = $_POST["room"];

$s = "SELECT * FROM rooms WHERE room = '$room'";
$q = mysql_query($s);
$r = mysql_num_rows($q);
$dados = mysql_fetch_assoc($q);


echo $dados["pos_x"];
echo ",";
echo $dados["pos_y"];
echo ",";
echo $dados["zoom"];
echo ",";
echo $dados["tower"];
echo ",";
echo $dados["floor"];
echo ",";
echo $dados["name"];
echo ",";
echo $dados["typology"];
?>
