<?php
require('core.php');

$id = $_POST["id"];


$s = "SELECT * FROM office_hours WHERE teacher_id = '$id'";
$q = mysql_query($s);
$r = mysql_num_rows($q);
$dados = mysql_fetch_assoc($q);

$rid = $dados["room_id"];

$ns = "SELECT * FROM rooms WHERE id = '$rid'";
$nq = mysql_query($ns);
$nr = mysql_num_rows($nq);
$ndados = mysql_fetch_assoc($nq);



echo $ndados["pos_x"];
echo ",";
echo $ndados["pos_y"];
echo ",";
echo $ndados["zoom"];
echo ",";
echo $ndados["tower"];
echo ",";
echo $ndados["floor"];
echo ",";
echo $ndados["room"];
echo ",";
echo $dados["teacher_id"];
?>
