<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>Mapa do DEI</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <nav id="nav">
    <a class="nav-a" id="setBtn"><img class="nav-a-img" src="img/seta.png"></a>
    <a class="nav-a" id="cmdBtn" href="#"><img class="nav-a-img" src="img/cmd.png"></a>
    <a class="nav-a" id="offBtn" href="#"><img class="nav-a-img" src="img/off.png"></a>
  </nav>

  <div id="map">
    <?php
    $query=mysql_query("SELECT * FROM salas WHERE sala_name = 'maquina'");
    $result=mysql_num_rows($query);
    $fetch=mysql_fetch_object($query);

    if ($result == 1){
      $xPosLocation = $fetch->sala_x;
      $yPosLocation = $fetch->sala_y;
      $ZoomLocation = $fetch->zoom;
      echo "Location found";
    } else {
      echo "Room not found";
    }
    ?>

    <img id="map-image" style="left: <?php echo $xPosLocation ?>; top: <?php echo $yPosLocation ?>; width: <?php echo $ZoomLocation ?>" src="img/piso4.png"></div>
  </div>

 <script src="http://code.jquery.com/jquery-2.0.0.js"></script>
 <?php
 $query2=mysql_query("SELECT * FROM salas WHERE sala_name = 'secretaria'");
 $result2=mysql_num_rows($query2);
 $fetch2=mysql_fetch_object($query2);

 if ($result == 1){
   $xPos = $fetch->sala_x;
   $yPos = $fetch->sala_y;
   $Zoom = $fetch->zoom;
   echo "Secret Found";
 } else {
   echo "Room not found";
 }
 ?>

  <script>
  exp = document.getElementById('map-image'),
  setBtn = document.getElementById('setBtn');

  $(setBtn).click(function(){
//    var xPos = "<?php echo $xPos ?>";
//    var yPos = "<?php echo $yPos ?>";
    changePosition(exp, "-1300px", "-4500px");
  });

  function changePosition(i, x, y){
    $(i).animate({left: x, top: y});
  }

  </script>
</body>
</html>
