<?php
$q = "SELECT * FROM rooms WHERE typology = 'classroom'";
$s = mysql_query($q);

?>

<?php
while($r = mysql_fetch_assoc($s)){
  ?>
  $(popResult).append('<p><?php echo $r["room"] ?></p>');
  <?php
}
?>
