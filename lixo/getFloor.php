<?php
require('core.php');

if (isset($_POST['floorValue'])){
  $floorValue = $_POST["floorValue"];
  $typology = $_POST["typology"];
  $searchResult = $_POST["sR"];
  $filterResult = $_POST["fR"];

  //echo $searchResult;
  $s = "SELECT * FROM rooms WHERE typology = '$typology' AND floor = '$floorValue'";
  $q = mysql_query($s);
  $r = mysql_num_rows($q);


  echo "<div id='";
  echo $sR;
  echo "' class='pop-search'><p>";
  echo $floorValue;
  echo "</p></div>";

  echo "<div id='";
  echo $fR;
  echo "' class='pop-result'>";
  if ($r > 0){
    for ($i = 0; $i < $r; $i++){
      $dados[$i] = mysql_fetch_assoc($q);
      $nome[$i] = $dados[$i]["room"];
      echo "<p>";
      echo $nome[$i];
      echo "</p>";
    }
  } else {
    echo "<p>Sem resultados</p>";
  }
  echo "</div>";
}
?>
