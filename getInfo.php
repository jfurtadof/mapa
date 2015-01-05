<?php
require('core.php');

$room = $_POST["room"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];

$s = "SELECT * FROM rooms WHERE room = '$room'";

$q = mysql_query($s);
$r = mysql_num_rows($q);
$f = mysql_fetch_assoc($q);

$nid = $f["id"];

$ns = "SELECT * FROM service_hours WHERE id = '$nid'";
$nq = mysql_query($ns);
$nf = mysql_fetch_assoc($nq);


echo "<div id='";
echo $sR;
echo "' style='width: 339px;' class='pop-search'><p'>";
echo $f["name"];
echo "</p></div>";

echo "<div id='";
echo $fR;
echo "' style='width: 339px; height: 460px;' class='pop-result'>";

if ($f["secondname"] != NULL){
  echo "<p>";
  echo $f["secondname"];
  echo "</p>";
}

echo "<p>Sala ";
echo $nf["room"];
echo "</p>";

if ($nf["hours"] != NULL && $nf["days"] != NULL){
  echo "<p>Horário de Funcionamento:</p><p>";
  echo $nf["hours"];
  echo "</p><p>";
  echo $nf["days"];
  echo "</p>";
}

echo "<p>Contacto: </p>";

if ($nf["email"] != NULL){
  echo "<p>";
  echo $nf["email"];
  echo "</p>";
}

if ($nf["phone"] != NULL){
  echo "<p>";
  echo $nf["phone"];
  echo "</p>";
}

if ($nf["contact"] != NULL){
  echo "<p>";
  echo $nf["contact"];
  echo "</p>";
}

echo "</div>";

?>
