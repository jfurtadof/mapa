<?php
require('core.php');

$q = "SELECT * FROM rooms WHERE typology = 'classroom'";
$s = mysql_query($q);
$r = mysql_num_rows($s);

if ($r == 1){
  echo "ENTROU EM GETCLASSROOM E FEZ SELECT";
} else {
  echo "NÃO FEZ SELECT";
}

//while($r = mysql_fetch_assoc($s)){
  /* echo "$(popResult).append('<p><?php echo $r["room"] ?></p>');"*/
//}
?>
