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
      <a class="nav-a"><img class="nav-a-img one" id="quickBtn" src="img/cmd.png"></a>
    </span>
    <span id="searchDiv" class="more-levels level-two" style="display:none; margin-left: 383px;">
      <a class="nav-a"><img class="nav-a-img two" id="roomBtn" src="img/cpu.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="servBtn" src="img/motherboard.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="profBtn" src="img/mouse.png"></a>
      <a class="nav-a"><img class="nav-a-img two" id="eventsBtn" src="img/controller.png"></a>
    </span>
    <span id="roomDiv" class="more-levels level-three" style="display:none; margin-left: 510px;">
      <a class="nav-a"><img class="nav-a-img three" id="roomBtnIn" src="img/cpu.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="audBtn" src="img/drive.png"></a>
      <a class="nav-a"><img class="nav-a-img three" id="labBtn" src="img/laptop.png"></a>
    </span>
  </nav>

  <div id="map">
    <img id="map-image" src="img/mapapiso7.png"></div>
  </div>

  <script>
  searchBtn = document.getElementById('searchBtn');
  searchDiv = document.getElementById('searchDiv');
  roomBtn = document.getElementById('roomBtn');
  roomDiv = document.getElementById('roomDiv');
  servBtn = document.getElementById('servBtn');
  servDiv = document.getElementById('servDiv');

  quickBtn = document.getElementById('quickBtn');

  levelTwo = document.getElementsByClassName('level-two');
  levelThree = document.getElementsByClassName('level-three');

  $(searchBtn).click(function(){
    if (searchDiv.style.display != 'none'){
      $(quickBtn).animate({marginLeft: "0px"}, 200);
      $(searchDiv).fadeOut(170);
      $(levelThree).fadeOut(170);
    } else {
      $(quickBtn).animate({marginLeft: $(searchBtn).offset().left + "px"}, 200);
      $(searchDiv).fadeIn(200);
      searchDiv.style.display = "block";
    }
  });

  $(roomBtn).click(function(){
    if (roomDiv.style.display != 'none'){
      $(servBtn).animate({marginLeft: "0px"}, 200);
      $(roomDiv).fadeOut(170);
    } else {
      $(roomDiv).fadeIn(200);
      roomDiv.style.display = "block";
    }
  });

  $(servBtn).click(function(){
    $(servBtn).css("background-color", "yellow");
    if (roomDiv.style.display != 'none'){
    //  $(servBtn).animate({marginLeft: "0px"}, 200);
      $(roomDiv).fadeOut(170);
    } else {
    //  $(servBtn).css("margin-left", "-151px");
    $(roomDiv).fadeIn(200);
    $(levelTwo).not(servBtn).css("visibility", "hidden");
    roomDiv.style.display = "block";
    }
  });

/*  $('#searchBtn').click(function(){
    toggleOne('searchBtn','searchDiv', 'quickBtn');
  });

  $('#roomBtn').click(function(){
    toggleTwo('roomBtn', 'roomDiv', 'two', 'quickBtn');
  });

  $('#servBtn').click(function(){
    toggleTwo('servBtn', 'roomDiv', 'two', 'quickBtn');
  });

  function toggleOne(id, id2, id3){
    var i = document.getElementById(id);
    var iPos = $(i).offset();
    var iWidth = iPos.left;
    var i2 = document.getElementById(id2);
    var i3 = document.getElementById(id3);

    if (i2.style.display != 'none'){
      $(i3).animate({marginLeft: "0px"}, 200);
      $(i2).fadeOut(170);
    } else {
      $(i3).animate({marginLeft: iWidth+7+"px"}, 200);
      $(i2).fadeIn(200);
      i2.style.display = "block";
    }
  }

  function toggleTwo(id, id2, id3, id4){
    var i = document.getElementById(id);
    var iPos = $(i).offset();
    var iWidth = iPos.left;
    var i2 = document.getElementById(id2);
    var i3 = document.getElementsByClassName(id3);
    var i4 = document.getElementById(id4);

    alert(iWidth);

    if (i2.style.display != 'none'){
    $(i3).not(i).css("visibility", "visible");
    $(i2).fadeOut(200);
    } else {
      alert(i);
      $(i3).not(i).css("margin-left", "hidden");
      $(i2).fadeIn(200);
    i2.style.display = "block";
    }
  }

*/
/*
  function toggleTwo(id, id2, id3, id4){
    var i = document.getElementById(id);
    var iPos = $(i).offset();
    var iWidth = iPos.left;
    var i2 = document.getElementById(id2);
    var i3 = document.getElementById(id3);
    var i4 = document.getElementById(id4);

    alert(iWidth);

    if (i2.style.display != "none"){
      $(i2).fadeOut(170);
      $(i2).animate({left: "0px"}, 200);
      $(i3).animate({marginLeft: "0px"}, 200);
      $(i4).animate({marginLeft: "0px"}, 200);
    } else {
      $(i2).animate({marginLeft: iWidth-iWidth+"px"}, 200);
      $(i2).fadeIn(170);
      $(i2).fadeOut(170);
      $(i4).animate({marginLeft: iWidth+7+"px"}, 200);
    }
  }*/

  /*  $('#roomBtn').click(function(){
  $('#roomBtn').css("background-color", "red");
  toggleTwo('roomDiv', 'servBtn', 'mapBtn');
});

$('#servBtn').click(function(){
$('#servBtn').css("background-color", "red");
toggleTwo('servDiv', 'profBtn', 'mapBtn');
});*/



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
