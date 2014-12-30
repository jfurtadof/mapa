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
    <img id="map-image" src="img/mapapiso7.png"></div>
  </div>

  <script>
  searchBtn = document.getElementById('searchBtn');
  searchDiv = document.getElementById('searchDiv');
  quickBtn = document.getElementById('quickBtn');

  roomBtn = document.getElementById('roomBtn');
  roomDiv = document.getElementById('roomDiv');
  servBtn = document.getElementById('servBtn');
  servDiv = document.getElementById('servDiv');
  profBtn = document.getElementById('profBtn');
  profDiv = document.getElementById('profDiv');
  eventsBtn = document.getElementById('eventsBtn');
  eventsDiv = document.getElementById('eventsDiv');

  roomInBtn = document.getElementById('roomInBtn');
  audBtn = document.getElementById('audBtn');
  labBtn = document.getElementById('labBtn');
  profDesBtn = document.getElementById('profDesBtn');
  profInfBtn = document.getElementById('profInfBtn');
  evDesBtn = document.getElementById('evDesBtn');
  evInfBtn = document.getElementById('evInfBtn');

  pop = document.getElementById('pop');
  popSearch = document.getElementById('pop-search');
  popResult = document.getElementById('pop-result');
  popButtons = document.getElementById('pop-buttons');


  levelTwo = document.getElementsByClassName('level-two');
  levelThree = document.getElementsByClassName('level-three');

  /************ LEVEL-ONE BTNS  ***************/

  $(searchBtn).click(function(){
    if (searchDiv.style.display != 'none'){
      $(quickBtn).animate({marginLeft: "0px"}, 200);

      /************ CONFIGS VOLTAM AO INICIO  ***************/

      $(searchDiv).fadeOut(170);
      $(levelThree).fadeOut(170);

      $(servBtn).css("margin-left", "0px");
      $(profBtn).css("margin-left", "0px");
      $(eventsBtn).css("margin-left", "0px");

      $(roomBtn).css("visibility", "visible");
      $(servBtn).css("visibility", "visible");
      $(profBtn).css("visibility", "visible");
      $(eventsBtn).css("visibility", "visible");
    } else {
      $(quickBtn).animate({marginLeft: $(searchBtn).offset().left + "px"}, 200);
      $(searchDiv).fadeIn(200);
      searchDiv.style.display = "block";
    }
  });

  /************ LEVEL-TWO BTNS  ***************/

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
    if (servDiv.style.display != 'none'){
      $(servDiv).fadeOut(170);
      $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
      $(servBtn).css("margin-left", "0px");
      $(roomBtn).css("visibility", "visible");
      $(profBtn).css("visibility", "visible");
      $(eventsBtn).css("visibility", "visible");
    } else {
      $(servBtn).css("margin-left", "-540px");
      $(quickBtn).animate({marginLeft: $(servBtn).offset().left + 713 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(profBtn).css("visibility", "hidden");
      $(eventsBtn).css("visibility", "hidden");
      $(servDiv).fadeIn(200);
      servDiv.style.display = "block";
    }
  });

  $(profBtn).click(function(){
    if (profDiv.style.display != 'none'){
      $(profBtn).css("margin-left", "0px");
      $(profDiv).fadeOut(170);
      $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
      $(roomBtn).css("visibility", "visible");
      $(servBtn).css("visibility", "visible");
      $(eventsBtn).css("visibility", "visible");
    } else {
      $(profBtn).css("margin-left", "-283px");
      $(quickBtn).animate({marginLeft: 390 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(servBtn).css("visibility", "hidden");
      $(eventsBtn).css("visibility", "hidden");
      $(profDiv).fadeIn(200);
      profDiv.style.display = "block";
    }
  });

  $(eventsBtn).click(function(){
    if (eventsDiv.style.display != 'none'){
      $(eventsBtn).css("margin-left", "0px");
      $(eventsDiv).fadeOut(170);
      $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
      $(roomBtn).css("visibility", "visible");
      $(servBtn).css("visibility", "visible");
      $(profBtn).css("visibility", "visible");
    } else {
      $(eventsBtn).css("margin-left", "-543px");
      $(quickBtn).animate({marginLeft: 390 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(servBtn).css("visibility", "hidden");
      $(profBtn).css("visibility", "hidden");
      $(eventsDiv).fadeIn(200);
      eventsDiv.style.display = "block";
    }
  });

  /************ LEVEL-THREE BTNS  ***************/

  $(roomInBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(ROOM)').remove();
      $(popButtons).find('p:contains(TORRE)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('p:contains(PISO)').remove();
      $(popButtons).find('span:contains(0)').remove();
      $(popButtons).find('span:contains(1)').remove();
      $(popButtons).find('span:contains(2)').remove();
      $(popButtons).find('span:contains(3)').remove();
      $(popButtons).find('span:contains(4)').remove();
      $(popButtons).find('span:contains(5)').remove();
      $(popButtons).find('span:contains(6)').remove();
      $(roomInBtn).css("background-color", "yellow");
    } else {
      $(roomInBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>ROOM</p>');
      $(popButtons).append('<p class="pop-titles">TORRE</p><span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span>');
      $(popButtons).append('<p class="pop-titles">PISO</p><span class="pop-choose">0</span><span class="pop-choose">1</span><span class="pop-choose">2</span><span class="pop-choose">3</span><span class="pop-choose">4</span><span class="pop-choose">5</span><span class="pop-choose">6</span>');
    }
  });

  $(audBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(AUD)').remove();
      $(popButtons).find('p:contains(TORRE)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('p:contains(PISO)').remove();
      $(popButtons).find('span:contains(0)').remove();
      $(popButtons).find('span:contains(1)').remove();
      $(popButtons).find('span:contains(2)').remove();
      $(popButtons).find('span:contains(3)').remove();
      $(popButtons).find('span:contains(4)').remove();
      $(popButtons).find('span:contains(5)').remove();
      $(popButtons).find('span:contains(6)').remove();
      $(audBtn).css("background-color", "yellow");
    } else {
      $(audBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>AUD</p>');
      $(popButtons).append('<p class="pop-titles">TORRE</p><span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span>');
      $(popButtons).append('<p class="pop-titles">PISO</p><span class="pop-choose">0</span><span class="pop-choose">1</span><span class="pop-choose">2</span><span class="pop-choose">3</span><span class="pop-choose">4</span><span class="pop-choose">5</span><span class="pop-choose">6</span>');
    }
  });

  $(labBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(LAB)').remove();
      $(popButtons).find('p:contains(TORRE)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('p:contains(PISO)').remove();
      $(popButtons).find('span:contains(0)').remove();
      $(popButtons).find('span:contains(1)').remove();
      $(popButtons).find('span:contains(2)').remove();
      $(popButtons).find('span:contains(3)').remove();
      $(popButtons).find('span:contains(4)').remove();
      $(popButtons).find('span:contains(5)').remove();
      $(popButtons).find('span:contains(6)').remove();
      $(labBtn).css("background-color", "yellow");
    } else {
      $(labBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>LAB</p>');
      $(popButtons).append('<p class="pop-titles">TORRE</p><span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span>');
      $(popButtons).append('<p class="pop-titles">PISO</p><span class="pop-choose">0</span><span class="pop-choose">1</span><span class="pop-choose">2</span><span class="pop-choose">3</span><span class="pop-choose">4</span><span class="pop-choose">5</span><span class="pop-choose">6</span>');
    }
  });

  $(profDesBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(PROFDES)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('span:contains(H)').remove();
      $(popButtons).find('span:contains(I)').remove();
      $(popButtons).find('span:contains(J)').remove();
      $(popButtons).find('span:contains(K)').remove();
      $(popButtons).find('span:contains(L)').remove();
      $(popButtons).find('span:contains(M)').remove();
      $(popButtons).find('span:contains(N)').remove();
      $(popButtons).find('span:contains(O)').remove();
      $(popButtons).find('span:contains(P)').remove();
      $(popButtons).find('span:contains(Q)').remove();
      $(popButtons).find('span:contains(R)').remove();
      $(popButtons).find('span:contains(S)').remove();
      $(popButtons).find('span:contains(T)').remove();
      $(popButtons).find('span:contains(U)').remove();
      $(popButtons).find('span:contains(V)').remove();
      $(popButtons).find('span:contains(W)').remove();
      $(popButtons).find('span:contains(X)').remove();
      $(popButtons).find('span:contains(Y)').remove();
      $(popButtons).find('span:contains(Z)').remove();
      $(popButtons).find('br').remove();
      $(profDesBtn).css("background-color", "yellow");
    } else {
      $(profDesBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>PROFDES</p>');
      $(popButtons).append('<span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span><span class="pop-choose">H</span><span class="pop-choose">I</span><br><span class="pop-choose">J</span><span class="pop-choose">K</span><span class="pop-choose">L</span><span class="pop-choose">M</span><span class="pop-choose">N</span><span class="pop-choose">O</span><span class="pop-choose">P</span><span class="pop-choose">Q</span><span class="pop-choose">R</span><br><span class="pop-choose">S</span><span class="pop-choose">T</span><span class="pop-choose">U</span><span class="pop-choose">V</span><span class="pop-choose">W</span><span class="pop-choose">X</span><span class="pop-choose">Y</span><span class="pop-choose">Z</span>');

    }
  });

  $(profInfBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(PROFINF)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('span:contains(H)').remove();
      $(popButtons).find('span:contains(I)').remove();
      $(popButtons).find('span:contains(J)').remove();
      $(popButtons).find('span:contains(K)').remove();
      $(popButtons).find('span:contains(L)').remove();
      $(popButtons).find('span:contains(M)').remove();
      $(popButtons).find('span:contains(N)').remove();
      $(popButtons).find('span:contains(O)').remove();
      $(popButtons).find('span:contains(P)').remove();
      $(popButtons).find('span:contains(Q)').remove();
      $(popButtons).find('span:contains(R)').remove();
      $(popButtons).find('span:contains(S)').remove();
      $(popButtons).find('span:contains(T)').remove();
      $(popButtons).find('span:contains(U)').remove();
      $(popButtons).find('span:contains(V)').remove();
      $(popButtons).find('span:contains(W)').remove();
      $(popButtons).find('span:contains(X)').remove();
      $(popButtons).find('span:contains(Y)').remove();
      $(popButtons).find('span:contains(Z)').remove();
      $(popButtons).find('br').remove();
      $(profInfBtn).css("background-color", "yellow");
    } else {
      $(profInfBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>PROFINF</p>');
      $(popButtons).append('<span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span><span class="pop-choose">H</span><span class="pop-choose">I</span><br><span class="pop-choose">J</span><span class="pop-choose">K</span><span class="pop-choose">L</span><span class="pop-choose">M</span><span class="pop-choose">N</span><span class="pop-choose">O</span><span class="pop-choose">P</span><span class="pop-choose">Q</span><span class="pop-choose">R</span><br><span class="pop-choose">S</span><span class="pop-choose">T</span><span class="pop-choose">U</span><span class="pop-choose">V</span><span class="pop-choose">W</span><span class="pop-choose">X</span><span class="pop-choose">Y</span><span class="pop-choose">Z</span>');
    }
  });

  $(evDesBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(EVDES)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('span:contains(H)').remove();
      $(popButtons).find('span:contains(I)').remove();
      $(popButtons).find('span:contains(J)').remove();
      $(popButtons).find('span:contains(K)').remove();
      $(popButtons).find('span:contains(L)').remove();
      $(popButtons).find('span:contains(M)').remove();
      $(popButtons).find('span:contains(N)').remove();
      $(popButtons).find('span:contains(O)').remove();
      $(popButtons).find('span:contains(P)').remove();
      $(popButtons).find('span:contains(Q)').remove();
      $(popButtons).find('span:contains(R)').remove();
      $(popButtons).find('span:contains(S)').remove();
      $(popButtons).find('span:contains(T)').remove();
      $(popButtons).find('span:contains(U)').remove();
      $(popButtons).find('span:contains(V)').remove();
      $(popButtons).find('span:contains(W)').remove();
      $(popButtons).find('span:contains(X)').remove();
      $(popButtons).find('span:contains(Y)').remove();
      $(popButtons).find('span:contains(Z)').remove();
      $(popButtons).find('br').remove();
      $(evDesBtn).css("background-color", "yellow");
    } else {
      $(evDesBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>EVDES</p>');
      $(popButtons).append('<span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span><span class="pop-choose">H</span><span class="pop-choose">I</span><br><span class="pop-choose">J</span><span class="pop-choose">K</span><span class="pop-choose">L</span><span class="pop-choose">M</span><span class="pop-choose">N</span><span class="pop-choose">O</span><span class="pop-choose">P</span><span class="pop-choose">Q</span><span class="pop-choose">R</span><br><span class="pop-choose">S</span><span class="pop-choose">T</span><span class="pop-choose">U</span><span class="pop-choose">V</span><span class="pop-choose">W</span><span class="pop-choose">X</span><span class="pop-choose">Y</span><span class="pop-choose">Z</span>');
    }
  });

  $(evInfBtn).click(function(){
    if (pop.style.display != 'none'){
      $(pop).fadeOut(200);
      $(popResult).find('p:contains(EVINF)').remove();
      $(popButtons).find('span:contains(A)').remove();
      $(popButtons).find('span:contains(B)').remove();
      $(popButtons).find('span:contains(C)').remove();
      $(popButtons).find('span:contains(D)').remove();
      $(popButtons).find('span:contains(E)').remove();
      $(popButtons).find('span:contains(F)').remove();
      $(popButtons).find('span:contains(G)').remove();
      $(popButtons).find('span:contains(H)').remove();
      $(popButtons).find('span:contains(I)').remove();
      $(popButtons).find('span:contains(J)').remove();
      $(popButtons).find('span:contains(K)').remove();
      $(popButtons).find('span:contains(L)').remove();
      $(popButtons).find('span:contains(M)').remove();
      $(popButtons).find('span:contains(N)').remove();
      $(popButtons).find('span:contains(O)').remove();
      $(popButtons).find('span:contains(P)').remove();
      $(popButtons).find('span:contains(Q)').remove();
      $(popButtons).find('span:contains(R)').remove();
      $(popButtons).find('span:contains(S)').remove();
      $(popButtons).find('span:contains(T)').remove();
      $(popButtons).find('span:contains(U)').remove();
      $(popButtons).find('span:contains(V)').remove();
      $(popButtons).find('span:contains(W)').remove();
      $(popButtons).find('span:contains(X)').remove();
      $(popButtons).find('span:contains(Y)').remove();
      $(popButtons).find('span:contains(Z)').remove();
      $(popButtons).find('br').remove();
      $(evInfBtn).css("background-color", "yellow");
    } else {
      $(evInfBtn).css("background-color", "pink");
      $(pop).fadeIn(200);
      pop.style.display = "block";
      $(popResult).append('<p>EVINF</p>');
      $(popButtons).append('<span class="pop-choose">A</span><span class="pop-choose">B</span><span class="pop-choose">C</span><span class="pop-choose">D</span><span class="pop-choose">E</span><span class="pop-choose">F</span><span class="pop-choose">G</span><span class="pop-choose">H</span><span class="pop-choose">I</span><br><span class="pop-choose">J</span><span class="pop-choose">K</span><span class="pop-choose">L</span><span class="pop-choose">M</span><span class="pop-choose">N</span><span class="pop-choose">O</span><span class="pop-choose">P</span><span class="pop-choose">Q</span><span class="pop-choose">R</span><br><span class="pop-choose">S</span><span class="pop-choose">T</span><span class="pop-choose">U</span><span class="pop-choose">V</span><span class="pop-choose">W</span><span class="pop-choose">X</span><span class="pop-choose">Y</span><span class="pop-choose">Z</span>');
    }
  });
  </script>
</body>
</html>
