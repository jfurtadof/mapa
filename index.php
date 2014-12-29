<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>Mapa do DEI</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
  <nav id="nav">
    <span class="level-one">
    <a class="nav-a"><img class="nav-a-img one" id="searchBtn" src="img/search.png"></a>
    <span id="searchDiv" style="display:none" class="more-levels level-two">
      <a class="nav-a"><img class="nav-a-img two" id="roomBtn" src="img/cpu.png"></a>
      <span id="roomDiv" class="more-levels level-three">
        SALAS
      </span>
      <a class="nav-a"><img class="nav-a-img two" id="servBtn" src="img/motherboard.png"></a>
      <span id="servDiv" class="more-levels">
        SERVIÇOS
      </span>
      <a class="nav-a"><img class="nav-a-img two" id="profBtn" src="img/mouse.png"></a>
      <span id="profDiv" class="more-levels">
        PROFS
      </span>
      <a class="nav-a"><img class="nav-a-img two" id="officeBtn" src="img/monitor.png"></a>
      <span id="officeDiv" class="more-levels">
        OFFICE
      </span>
      <a class="nav-a"><img class="nav-a-img two" id="eventsBtn" src="img/controller.png"></a>
      <span id="eventsDiv" class="more-levels">
        EVENTS
      </span>
    </span>
    <a class="nav-a"><img class="nav-a-img one" id="mapBtn" src="img/keyboard.png"></a>
    <a class="nav-a"><img class="nav-a-img one" id="quickBtn" src="img/cmd.png"></a>
  </span>
  </nav>

  <div id="map">
    <img id="map-image" src="img/piso7.png"></div>
  </div>


  <script>

  $('#searchBtn').click(function(){
    toggleOne('searchBtn','searchDiv', 'mapBtn');
  });

  $('#mapBtn').click(function(){
    toggleOne('mapBtn','searchDiv', 'quickBtn');
  });

  function toggleOne(id, id2, id3){
    var i = document.getElementById(id);
    var iPos = $(i).offset();
    var iWidth = iPos.left;
    var i2 = document.getElementById(id2);
    var i3 = document.getElementById(id3);

    alert(iWidth);

    if (i2.style.display != "none"){
      $(i2).fadeOut(170);
      $(i2).animate({left: "0px"}, 200);
      $(i3).animate({marginLeft: "0px"}, 200);
    } else {
      $(i2).animate({left: iWidth-152+"px"}, 200);
      $(i2).fadeIn(170);
      $(i3).animate({marginLeft: "503px"}, 200);
    }
  }





/*  $('#roomBtn').click(function(){
    $('#roomBtn').css("background-color", "red");
    toggleTwo('roomDiv', 'servBtn', 'mapBtn');
  });

  $('#servBtn').click(function(){
    $('#servBtn').css("background-color", "red");
    toggleTwo('servDiv', 'profBtn', 'mapBtn');
  });*/


/*
function toggleTwo(id, id2, id3){
  var i = document.getElementById(id);
  var i2 = document.getElementById(id2);
  var i3 = document.getElementById(id3);

  if (i.style.display == "inline-block"){
    $(i).fadeOut(170);
    $(i).animate({left: "103px"}, 200);
    $(i2).animate({marginLeft: "0px"}, 200);
    $(i3).animate({marginLeft: "505px"}, 200);
  } else {
    $(i).animate({left: "103px" + "103px"}, 200);
    $(i).fadeIn(170);
    $(i2).animate({marginLeft: "97px"}, 200);
    $(i3).animate({marginLeft: "603px"}, 200);
  }
}


/*
$('#roomBtn').click(function(){
  //  toggleDi('roomDiv', 'two');
  //    $('.two').not('#roomBtn').css("opacity", "0.7");
  });



  function toggleDisabled(id, btn, cl){
    var i = document.getElementById(id);
    var b = document.getElementById(btn);
    var c = document.getElementsByClassName(cl);
    if (i.style.display == 'inline-block'){
      $(i).fadeOut(200);
      $(c).not(b).css("opacity", "1");
    } else {
      $(i).fadeIn(200);
      i.style.display = 'inline-block';
      $(c).not(b).css("opacity", "0.7");
    }
  }
  */

  </script>
</body>
</html>
