<?php
require('core.php');

$tid = $_POST["tid"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];

$s = "SELECT * FROM teachers WHERE teacher_id = '$tid'";
$q = mysql_query($s);
$f = mysql_fetch_assoc($q);
$r = mysql_num_rows($q);

$n = $f["teacher_name"];
$e = $f["teacher_email"];
$c = $f["teacher_course"];

$ns = "SELECT * FROM office_hours WHERE teacher_id = '$tid'";
$nq = mysql_query($ns);
$nf = mysql_fetch_assoc($nq);
$nr = mysql_num_rows($nq);

for ($i = 0; $i < $nr; $i++){
  $wk[$i] = $nf["weekday"];
  $hb[$i] = $nf["hour_begin"];
  $he[$i] = $nf["hour_end"];
}

/*********  ATÉ AQUI OK ******/

echo $sR;

/*echo "<div id='";
echo $sR;
echo "' style='width: 339px;' class='pop-search'><p'>";
echo $n;
echo "</p></div>";



echo "<div id='";
echo $fR;
echo "' style='width: 339px; height: 460px;' class='pop-result'>";




if ($c == '1'){
  echo "<p>Engenharia Informática</p>";
} else if ($c == '2'){
  echo "<p>Design e Multimédia</p>";
} else {
  echo "<p>EI / DM</p>";
}


echo "<p>Horário de Atendimento: </p>";

for ($i = 0; $i < $nr, $i++){
  echo "<p>";
  echo $wk[$i]
  echo ", ";
  echo $hb[$i];
  echo " - ";
  echo $he[$i];
  echo "</p>";
}

echo "<p>Contacto: </p>";

if ($e != NULL){
  echo "<p>";
  echo $e;
  echo "</p>";
}

echo "</div>";*/

?>
