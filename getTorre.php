<?php
require('core.php');

if (isset($_POST['torreValue'])){
  $torreValue = $_POST["torreValue"];
  $searchResult = $_POST["sR"];
  $filterResult = $_POST["fR"];

  //echo $searchResult;
  $s = "SELECT * FROM rooms WHERE typology = 'classroom' AND tower = '$torreValue'";
  $q = mysql_query($s);
  $r = mysql_num_rows($q);

  echo "<div id='";
  echo $sR;
  echo "' class='pop-search'><p>";
  echo $torreValue;
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
    echo "Sem Resultados";
  }
  echo "</div>";
  echo '<div class="pop-buttons">
  <p class="pop-titles-room">TORRE</p>
  <span class="pop-choose torre" style="cursor:pointer">A</span>
  <span class="pop-choose torre" style="cursor:pointer">B</span>
  <span class="pop-choose torre" style="cursor:pointer">C</span>
  <span class="pop-choose torre" style="cursor:pointer">D</span>
  <span class="pop-choose torre" style="cursor:pointer">E</span>
  <span class="pop-choose torre" style="cursor:pointer">F</span>
  <span class="pop-choose torre" style="cursor:pointer">G</span>
  <p class="pop-titles-room">PISO</p>
  <span class="pop-choose piso" style="cursor:pointer">0</span>
  <span class="pop-choose piso" style="cursor:pointer">1</span>
  <span class="pop-choose piso" style="cursor:pointer">2</span>
  <span class="pop-choose piso" style="cursor:pointer">3</span>
  <span class="pop-choose piso" style="cursor:pointer">4</span>
  <span class="pop-choose piso" style="cursor:pointer">5</span>
  <span class="pop-choose piso" style="cursor:pointer">6</span>
  </div>
  </div>';
}
?>
