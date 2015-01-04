<?php
require('core.php');

$eventName = $_POST["eventName"];
$eventCourse = $_POST["eventCourse"];
$searchResult = $_POST["sR"];
$filterResult = $_POST["fR"];

if ($eventName != '' && $eventCourse == ''){
  $s = "SELECT * FROM teachers WHERE teacher_name LIKE '%$eventName%'";
}

if ($eventName != '' && $eventCourse != ''){
  $s = "SELECT * FROM teachers WHERE teacher_course = '$eventCourse' teacher_name LIKE '%$eventName%'";
}

$q = mysql_query($s);
$r = mysql_num_rows($q);


echo "<div id='";
echo $sR;
echo "' class='pop-search'><p>";
echo $eventName;
echo "</p></div>";

echo "<div id='";
echo $fR;
echo "' class='pop-result'>";

if ($r > 0){
  for ($i = 0; $i < $r; $i++){
      $dados[$i] = mysql_fetch_assoc($q);
      $nome[$i] = $dados[$i]["event_name"];
      $course[$i] = $dados[$i]["event_course"];
      $id[$i] = $dados[$i]["event_id"];


      echo "<p><a class='pop-event-";
      if ($course[$i] == '1'){
        echo "inf";
      } else if ($course[$i] == '2'){
        echo "des";
      } else {
        echo "both";
      }
      echo "' id='event-";
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
