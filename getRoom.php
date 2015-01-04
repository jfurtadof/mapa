<?php
require('core.php');

$towerValue = $_POST["towerValue"];
$floorValue = $_POST["floorValue"];
$typology = $_POST["typology"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];


if ($towerValue != '' && $floorValue != '' && $typology != ''){
  $s = "SELECT * FROM rooms WHERE typology = '$typology' AND floor = '$floorValue' AND tower = '$towerValue'";
}

if ($towerValue != '' && $floorValue == '' && $typology != ''){
  $s = "SELECT * FROM rooms WHERE typology = '$typology' AND tower = '$towerValue'";
}

if ($towerValue == '' && $floorValue != '' && $typology != ''){
  $s = "SELECT * FROM rooms WHERE typology = '$typology' AND floor = '$floorValue'";
}

if ($towerValue == '' && $floorValue != '' && $typology == ''){
  $s = "SELECT * FROM rooms WHERE floor = '$floorValue'";
}

if ($towerValue != '' && $floorValue == '' && $typology == ''){
  $s = "SELECT * FROM rooms WHERE tower = '$towerValue'";
}

$q = mysql_query($s);
$r = mysql_num_rows($q);


echo "<div id='";
echo $sR;
echo "' class='pop-search'><p>";
echo $towerValue, $floorValue;
echo "</p></div>";

echo "<div id='";
echo $fR;
echo "' class='pop-result'>";
if ($r > 0){
  for ($i = 0; $i < $r; $i++){
      $dados[$i] = mysql_fetch_assoc($q);
      $nome[$i] = $dados[$i]["room"];

      if ($typology == 'classroom'){
        echo "<p>";
        echo $nome[$i];
        echo "</p>";
      } else {
        echo "<p>";
        echo $nome[$i];
        echo " (";
        echo $dados[$i]["name"];
        echo ")";
        echo "</p>";
      }
    }
} else {
  echo "<p>Sem resultados</p>";
}
echo "</div>";

?>
