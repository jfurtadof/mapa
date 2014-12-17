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

<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
<link href="styleTeste.css" rel="stylesheet" type="text/css">


<h3>Pure Javascript</h3>
<div class="zoomPic"></div>
<button class='zoom'>Zoom</button>
<button class='pause'>Pause</button>
<button class='zoomout'>Zoom Out</button>
