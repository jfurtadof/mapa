<?php
require('core.php');

$id = $_POST["id"];


$s = "SELECT * FROM office_hours WHERE teacher_id = '$id'";
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
?>
