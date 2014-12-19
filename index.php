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
    <a class="nav-a" id="cmdBtn"><img class="nav-a-img" src="img/cmd.png"></a>
    <a class="nav-a" id="offBtn"><img class="nav-a-img" src="img/off.png"></a>
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

    <img id="map-image" src="img/piso7.png" style="left: <?php echo $xPosLocation ?>; top: <?php echo $yPosLocation ?>; width:<?php echo $ZoomLocation ?>;"></div>
  </div>

 <script src="http://code.jquery.com/jquery-2.0.0.js"></script>

  <script>
  exp = document.getElementById('map-image'),
  setBtn = document.getElementById('setBtn');
  cmdBtn = document.getElementById('cmdBtn');
  offBtn = document.getElementById('offBtn');

  $(setBtn).click(function(){
    <?php
    $queryR=mysql_query("SELECT * FROM salas WHERE sala_name = 'secretaria'");
    $resultR=mysql_num_rows($queryR);
    $fetchR=mysql_fetch_object($queryR);

    if ($result == 1){
      $xPos = $fetchR->sala_x;
      $yPos = $fetchR->sala_y;
      $Zoom = $fetchR->zoom;
    } else {
      echo "Room not found";
    }
    ?>
    var xPos = "<?php echo $xPos ?>";
    var yPos = "<?php echo $yPos ?>";
    changePosition(exp, xPos, yPos);
  });

  $(cmdBtn).click(function(){
    <?php
    $queryR=mysql_query("SELECT * FROM salas WHERE sala_name = 'gab'");
    $resultR=mysql_num_rows($queryR);
    $fetchR=mysql_fetch_object($queryR);

    if ($result == 1){
      $xPos = $fetchR->sala_x;
      $yPos = $fetchR->sala_y;
      $Zoom = $fetchR->zoom;
    } else {
      echo "Room not found";
    }
    ?>
    var xPos = "<?php echo $xPos ?>";
    var yPos = "<?php echo $yPos ?>";
    changePosition(exp, xPos, yPos);
  });

  $(offBtn).click(function(){
    <?php
    $queryR=mysql_query("SELECT * FROM salas WHERE sala_name = 'cisuc'");
    $resultR=mysql_num_rows($queryR);
    $fetchR=mysql_fetch_object($queryR);

    if ($result == 1){
      $xPos = $fetchR->sala_x;
      $yPos = $fetchR->sala_y;
      $Zoom = $fetchR->zoom;
    } else {
      echo "Room not found";
    }
    ?>
    var xPos = "<?php echo $xPos ?>";
    var yPos = "<?php echo $yPos ?>";
    changePosition(exp, xPos, yPos);
  });

  function changePosition(i, x, y){
    $(i).animate({left: x, top: y});
  }

  </script>
</body>
</html>
