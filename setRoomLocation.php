<?php
require('core.php');

$tower = $_POST["tower"];
$floor = $_POST["floor"];
$block = $_POST["block"];


$s = "SELECT * FROM rooms WHERE tower = '$tower' AND floor = '$floor' AND block = '$block'";
$q = mysql_query($s);
$r = mysql_num_rows($q);
$dados = mysql_fetch_assoc($q);


//echo $dados["pos_x"];
//echo $dados["pos_y"];
//echo $dados["zoom"];


echo $dados["pos_x"];
echo ",";
echo $dados["pos_y"];
echo ",";
echo $dados["zoom"];


/*
if ($r > 0){
  for ($i = 0; $i < $r; $i++){
      $dados[$i] = mysql_fetch_assoc($q);
      $nome[$i] = $dados[$i]["name"];
      $room[$i] = $dados[$i]["room"];

      if ($typology == 'classroom'){
        echo "<p><a class='pop-room-link-";
        echo $typology;
        echo "' id='";
        echo $room[$i];
        echo "'href='#'>";
        echo $room[$i];
        echo "</a></p>";
      } else {
        echo "<p><a class='pop-room-link-";
        echo $typology;
        echo "' id='";
        echo $room[$i];
        echo "'href='#'>";
        echo $room[$i];
        echo " (";
        echo $nome[$i];
        echo ")";
        echo "</p>";
      }
    }
} else {
  echo "<p>Sem resultados</p>";
}
echo "</div>";
*/
?>
