<?php
require('core.php');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>Mapa do DEI</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script language="JavaScript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script></head>
  <script src="js/functions.js"></script>
<body>
  <nav id="nav">
    <span class="level-one">
      <a class="nav-a"><img class="nav-a-img one" id="searchBtn" src="img/search.png"></a>
      <a class="nav-a"><img class="nav-a-img one" id="quickBtn" src="img/cmd.png"></a>
    </span>

    <span id="searchDiv" class="more-levels level-two" style="display:none; margin-left: 383px;">
      <a class="nav-a"><img class="nav-a-img two" id="roomBtn" src="img/cpu.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="servBtn" src="img/motherboard.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="profBtn" src="img/mouse.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="eventsBtn" src="img/bin.png"></a>
    </span>

    <span id="roomDiv" class="more-levels level-three" style="display:none; margin-left: 513px;">
      <a class="nav-a"><img class="nav-a-img three" id="roomInBtn" src="img/cpuIn.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="audBtn" src="img/drive.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="labBtn" src="img/laptop.png"></a>
    </span>
    <span id="servDiv" class="more-levels level-three" style="display:none; margin-left: 313px;">
      <a class="nav-a"><img class="nav-a-img three" id="secrBtn" src="img/file.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="barBtn" src="img/plug.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="helpBtn" src="img/router.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="cisucBtn" src="img/usb.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="gapiBtn" src="img/flip.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="neiBtn" src="img/controller.png"></a>
    </span>
    <span id="profDiv" class="more-levels level-three" style="display:none; margin-left: 577px;">
      <a class="nav-a"><img class="nav-a-img three" id="profDesBtn" src="img/design.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="profInfBtn" src="img/informatics.png"></a>
    </span>
    <span id="eventsDiv" class="more-levels level-three" style="display:none; margin-left: 577px;">
      <a class="nav-a"><img class="nav-a-img three" id="evDesBtn" src="img/design.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="evInfBtn" src="img/informatics.png"></a>
    </span>
  </nav>

  <div id="pop" style="display:none;">
    <div id="pop-search">
    </div>
    <div id="pop-result">
    </div>
    <div id="pop-buttons">
    </div>
  </div>

  <div id="map">
     <?php
    require('./svg.php');
    ?>

    <img id="map-image" src="img/design.png"></div>
  </div>
</body>
</html>
