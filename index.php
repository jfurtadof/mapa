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
    <a class="nav-a" id="setBtn" href="#"><img class="nav-a-img" src="img/seta.png"></a>
    <a class="nav-a" id="cmdBtn" href="#"><img class="nav-a-img" src="img/cmd.png"></a>
    <a class="nav-a" id="offBtn" href="#"><img class="nav-a-img" src="img/off.png"></a>
  </nav>

<!--  <div id="map">
    <img id="map-image" src="img/piso4.png"></div>
  </div>

  <script src="http://code.jquery.com/jquery-2.0.0.js"></script>
  <script>
  exp = document.getElementById('map-image'),
  setBtn = document.getElementById('setBtn');

  $(setBtn).click(function(){
    $('.nav-a').css("background-color", "red");
  });

  function changePosition(img, xPos, yPos){
    $(img).animate({left: xPos, top: yPos});
  }

  </script>-->
</body>
</html>
