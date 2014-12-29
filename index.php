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
      <span id="searchDiv" class="more-levels level-two" style="display:none; margin-left: 383px;" >
        <a class="nav-a"><img class="nav-a-img two" id="roomBtn" src="img/cpu.png"></a>
        <span id="roomDiv" class="more-levels level-three">
          <a class="nav-a"><img class="nav-a-img three" id="roomBtnIn" src="img/cpu.png"></a>
          <a class="nav-a"><img class="nav-a-img three" id="audBtn" src="img/drive.png"></a>
          <a class="nav-a"><img class="nav-a-img three" id="labBtn" src="img/laptop.png"></a>
        </span>
        <a class="nav-a"><img class="nav-a-img two" id="servBtn" src="img/motherboard.png"></a>
        <a class="nav-a"><img class="nav-a-img two" id="profBtn" src="img/mouse.png"></a>
        <a class="nav-a"><img class="nav-a-img two" id="eventsBtn" src="img/controller.png"></a>
      </span>
      <a class="nav-a"><img class="nav-a-img one" id="quickBtn" src="img/cmd.png"></a>
    </span>
  </nav>

  <div id="map">
    <img id="map-image" src="img/mapapiso7.png"></div>
  </div>

  <script>
  $('#searchBtn').click(function(){
    toggleOne('searchBtn','searchDiv', 'quickBtn');
  });

  $('#quickBtn').click(function(){
    toggleOne('quickBtn','searchDiv', 'quickBtn');
  });


  function toggleOne(id, id2, id3){
    var i = document.getElementById(id);
    var iPos = $(i).offset();
    var iWidth = iPos.left;
    var i2 = document.getElementById(id2);
    var i3 = document.getElementById(id3);

    //alert(iWidth);

    if (i2.style.display != 'none'){
      $(i3).animate({marginLeft: "0px"}, 200);
      $(i2).fadeOut(170);
    //  $(i2).animate({marginLeft: iWidth+"px"}, 200);
    } else {
      $(i3).animate({marginLeft: iWidth+7+"px"}, 200);
      $(i2).fadeIn(200);
    //  $(i2).animate({marginLeft: iWidth-132+"px"}, 200);
      i2.style.display = "block";
    }
  }
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
