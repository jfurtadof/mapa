<?php
require('core.php');

$profName = $_POST["profName"];
$courseName = $_POST["courseName"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];

if ($profName != '' && $courseName == ''){
  $s = "SELECT * FROM teachers WHERE teacher_name LIKE '%$profName%'";
}

if ($profName != '' && $courseName != ''){
  $s = "SELECT * FROM teachers WHERE teacher_course = '$courseName' teacher_name LIKE '%$profName%'";
}

if ($profName == '' && $courseName == ''){
  $s = "SELECT * FROM teachers";
}

$q = mysql_query($s);
$r = mysql_num_rows($q);


echo "<div id='";
echo $sR;
echo "' class='pop-search'><p>";
echo $profName;
echo "</p></div>";

echo "<div id='";
echo $fR;
echo "' class='pop-result'>";

if ($r > 0){
  for ($i = 0; $i < $r; $i++){
      $dados[$i] = mysql_fetch_assoc($q);
      $nome[$i] = $dados[$i]["teacher_name"];
      $course[$i] = $dados[$i]["teacher_course"];
      $id[$i] = $dados[$i]["teacher_id"];


      echo "<p><a class='pop-prof-";
      if ($course[$i] == '1'){
        echo "inf";
      } else if ($course[$i] == '2'){
        echo "des";
      } else {
        echo "both";
      }
      echo "' id='prof-";
      echo $id[$i];
      echo "'href='#'>";
      echo $nome[$i];
      echo "</a></p>";
    }
} else {
  echo "<p>Sem resultados</p>";
}
echo "</div>";

?>
