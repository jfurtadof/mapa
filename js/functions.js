$(document).ready(function () {
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

  popRoom = document.getElementById('pop-room');
  popSearchRoom = document.getElementById('pop-search-room');
  popResultRoom = document.getElementById('pop-result-room');
  popRoomClassroom = document.getElementById('pop-room-classroom');
  popRoomClassroomEditable = document.getElementById('pop-room-classroom-editable');
  popSearchRoomClassroom = document.getElementById('pop-search-room-classroom');
  popResultRoomClassroom = document.getElementById('pop-result-room-classroom');
  popRoomAud = document.getElementById('pop-room-aud');
  popRoomAudEditable = document.getElementById('pop-room-aud-editable');
  popSearchRoomAud = document.getElementById('pop-search-room-aud');
  popResultRoomAud = document.getElementById('pop-result-room-aud');
  popRoomLab = document.getElementById('pop-room-lab');
  popRoomLabEditable = document.getElementById('pop-room-lab-editable');
  popSearchRoomLab = document.getElementById('pop-search-room-lab');
  popResultRoomLab = document.getElementById('pop-result-room-lab');

  popProf = document.getElementById('pop-prof');
  popSearchProf = document.getElementById('pop-search-prof');
  popResultProf = document.getElementById('pop-result-prof');
  popProfDes = document.getElementById('pop-prof-des');
  popSearchProfDes = document.getElementById('pop-search-prof-des');
  popResultProfDes = document.getElementById('pop-result-prof-des');
  popProfInf = document.getElementById('pop-prof-inf');
  popSearchProfInf = document.getElementById('pop-search-prof-inf');
  popResultProfInf = document.getElementById('pop-result-prof-inf');


  popEvents = document.getElementById('pop-events');
  popSearchEvents = document.getElementById('pop-search-events');
  popResultEvents = document.getElementById('pop-result-events');
  popEventsDes = document.getElementById('pop-events-des');
  popSearchEventsDes = document.getElementById('pop-search-events-des');
  popResultEventsDes = document.getElementById('pop-result-events-des');
  popEventsInf = document.getElementById('pop-events-inf');
  popSearchEventsInf = document.getElementById('pop-search-events-inf');
  popResultEventsInf = document.getElementById('pop-result-events-inf');

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
      $(popRoom).fadeOut(200);

    } else {
      $(roomDiv).fadeIn(200);
      roomDiv.style.display = "block";

      $(popRoom).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      popRoom.style.display = "block";

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

      $(popProf).fadeOut(200);
    } else {

      $(profBtn).css("margin-left", "-283px");
      $(quickBtn).animate({marginLeft: 390 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(servBtn).css("visibility", "hidden");
      $(eventsBtn).css("visibility", "hidden");
      $(profDiv).fadeIn(200);
      profDiv.style.display = "block";

      $(popProf).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      popProf.style.display = "block";

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

      $(popEvents).fadeOut(200);
    } else {
      $(eventsBtn).css("margin-left", "-543px");
      $(quickBtn).animate({marginLeft: 390 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(servBtn).css("visibility", "hidden");
      $(profBtn).css("visibility", "hidden");
      $(eventsDiv).fadeIn(200);
      eventsDiv.style.display = "block";

      $(popEvents).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      popEvents.style.display = "block";
    }
  });

  /************ LEVEL-THREE BTNS  ***************/

  $(roomInBtn).click(function(){
    if (popRoomClassroom.style.display != 'none'){
      $(popRoomClassroom).fadeOut(200);
      $(popRoom).fadeIn(200);
      $(roomInBtn).css("background-color", "yellow");
    } else {
      $(roomInBtn).css("background-color", "pink");
      $(popRoomClassroom).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popRoomClassroom.style.display = "block";
    }

  /*  $('.tower').click(function(){
      var torreValue = $(this).text();
      var typology = "classroom";
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');
      getTower(torreValue, typology, sR, fR, popRoomClassroomEditable);
    });*/

    $('.floor').click(function(){
      var floorValue = $(this).text();
      var typology = "classroom";
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');
      getFloor(floorValue, typology, sR, fR, popRoomClassroomEditable);
    });

  });

  $(audBtn).click(function(){
    if (popRoomAud.style.display != 'none'){
      $(popRoomAud).fadeOut(200);
      $(popRoom).fadeIn(200);
      $(audBtn).css("background-color", "yellow");
    } else {
      $(audBtn).css("background-color", "pink");
      $(popRoomAud).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popRoomAud.style.display = "block";
    }

    $('.tower').click(function(){
      var torreValue = $(this).text();
      var typology = "amphitheater";
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');
      getTower(torreValue, typology, sR, fR, popRoomAudEditable);
    });
  });

  $(labBtn).click(function(){
    if (popRoomLab.style.display != 'none'){
      $(popRoomLab).fadeOut(200);
      $(popRoom).fadeIn(200);
      $(labBtn).css("background-color", "yellow");
    } else {
      $(labBtn).css("background-color", "pink");
      $(popRoomLab).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      popRoomLab.style.display = "block";
    }

    $('.tower').click(function(){
      var torreValue = $(this).text();
      var typology = "laboratory";
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');
      getTower(torreValue, typology, sR, fR, popRoomLabEditable);
    });
  });


  $(profDesBtn).click(function(){
    if (popProfDes.style.display != 'none'){
      $(popProfDes).fadeOut(200);
      $(popProf).fadeIn(200);
      $(profDesBtn).css("background-color", "yellow");
    } else {
      $(profDesBtn).css("background-color", "pink");
      $(popProfDes).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popProfDes.style.display = "block";
    }
  });


  $(profInfBtn).click(function(){
    if (popProfInf.style.display != 'none'){
      $(popProfInf).fadeOut(200);
      $(popProf).fadeIn(200);
      $(profInfBtn).css("background-color", "yellow");
    } else {
      $(profInfBtn).css("background-color", "pink");
      $(popProfInf).fadeIn(200);

      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popProfInf.style.display = "block";
    }
  });


  $(evDesBtn).click(function(){
    if (popEventsDes.style.display != 'none'){
      $(popEventsDes).fadeOut(200);
      $(popEvents).fadeIn(200);
      $(evDesBtn).css("background-color", "yellow");
    } else {
      $(evDesBtn).css("background-color", "pink");
      $(popEventsDes).fadeIn(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popEventsDes.style.display = "block";
    }
  });


  $(evInfBtn).click(function(){
    if (popEventsInf.style.display != 'none'){
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeIn(200);
      $(evInfBtn).css("background-color", "yellow");
    } else {
      $(evInfBtn).css("background-color", "pink");
      $(popEventsInf).fadeIn(200);
      $(popEventsDes).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProf).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popRoom).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomAud).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      popEventsInf.style.display = "block";
    }
  });


  function getTower(torreValue, typology, sR, fR, pD){
    var rqst = $.ajax({
          type: "POST",
          url: "./getTower.php",
          data: { torreValue: torreValue, typology: typology, sR: sR, fR: fR
          }
        }).done(function(msg) {
          $(pD).html(msg);
        });
      }

  function getFloor(floorValue, typology, sR, fR, pD){
        var rqst = $.ajax({
          type: "POST",
          url: "./getFloor.php",
          data: { floorValue: floorValue, typology: typology, sR: sR, fR: fR
          }
        }).done(function(msg) {
          $(pD).html(msg);
        });
      }

    });
