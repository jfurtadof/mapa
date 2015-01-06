<?php
require('core.php');

$room = $_POST["room"];

$s = "SELECT * FROM rooms WHERE room = '$room'";

$q = mysql_query($s);
$r = mysql_num_rows($q);
$f = mysql_fetch_assoc($q);

$floor = $f["floor"];


if ($floor == 1){
  echo "1";
} else if ($floor == 2){
  echo "2";
} else if ($floor == 3){
  echo "3";
} else if ($floor == 4){
  echo "4";
} else if ($floor == 5){
  echo "5";
} else {
  echo "6";
}
?>
