<?php
require('core.php');

$tower = $_POST["tower"];
$floor = $_POST["floor"];
$block = $_POST["block"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];

$s = "SELECT * FROM rooms WHERE tower = '$tower' AND floor = '$floor' AND block = '$block'";

$q = mysql_query($s);
$r = mysql_num_rows($q);
$f = mysql_fetch_assoc($q);


echo "<div id='";
echo $sR;
echo "' style='width: 339px;' class='pop-search'><p'>";
echo $f["name"];
echo "</p></div>";

echo "<div id='";
echo $fR;
echo "' style='width: 339px;' class='pop-result'>";

if ($f["secondname"] != NULL){
  echo "<p>";
  echo $f["secondname"];
  echo "</p>";
}

echo "<p>Sala: ";
echo $f["room"];
echo "</p>";

if ($f["open_time"] != NULL && $f["close_time"] != NULL){
  echo "<p>Horário de Funcionamento:</p><p>";
  echo $f["open_time"];
  echo " - ";
  echo $f["close_time"];
  echo "</p>";
} else {
  echo "Aberto a todas as horas";
}



echo "</div>";

?>
