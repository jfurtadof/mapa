<?php
require('core.php');

$id = $_POST["id2"];

$s = "SELECT * FROM office_hours WHERE teacher_id = '$id'";
$q = mysql_query($s);
$r = mysql_num_rows($q);


$i = 0;
while($d = mysql_fetch_assoc($q)){
  $rid[$i] = $d["room_id"];
//  echo $rid[$i];
  $i++;
}


for ($i = 0; $i < $r; $i++){
  $room_id[$i] = $rid[$i];
  $ns = "SELECT * FROM rooms WHERE id = '".$room_id[$i]."'";
  $nq = mysql_query($ns);
  $nr = mysql_num_rows($nq);
  $ndados = mysql_fetch_assoc($nq);
  //echo $nr;
//  echo $nq;

  $j = 0;
  while($j < $nr){
    echo $ndados["pos_x"];
    echo ",";
    echo $ndados["pos_y"];
    echo ",";
    echo $ndados["zoom"];
    echo ",";
    echo $ndados["tower"];
    echo ",";
    echo $ndados["floor"];
    echo ",";
    echo $ndados["room"];
    echo ",";
    $j++;
  }
  echo $id;
  
    /*echo $ndados["pos_x"];
    echo ",";
    echo $ndados["pos_y"];
    echo ",";
    echo $ndados["zoom"];
    echo ",";
    echo $ndados["tower"];
    echo ",";
    echo $ndados["floor"];
    echo ",";
    echo $ndados["room"];
    echo ",";
    echo $id;
    echo $i;
    $i++;*/

}
?>
