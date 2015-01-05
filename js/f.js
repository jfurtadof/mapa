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
  stdBtn = document.getElementById('stdBtn');
  staffBtn = document.getElementById('staffBtn');
  profDesBtn = document.getElementById('profDesBtn');
  profInfBtn = document.getElementById('profInfBtn');
  evDesBtn = document.getElementById('evDesBtn');
  evInfBtn = document.getElementById('evInfBtn');

  delBtn = document.getElementsByClassName('delBtn');

  popRoom = document.getElementById('pop-room');
  popRoomEditable = document.getElementById('pop-room-editable');
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

  popRoomStd = document.getElementById('pop-room-std');
  popRoomStdEditable = document.getElementById('pop-room-std-editable');
  popSearchRoomStd = document.getElementById('pop-search-room-std');
  popResultRoomStd = document.getElementById('pop-result-room-std');

  popRoomStaff = document.getElementById('pop-room-staff');
  popRoomStaffEditable = document.getElementById('pop-room-staff-editable');
  popSearchRoomStaff = document.getElementById('pop-search-room-staff');
  popResultRoomStaff = document.getElementById('pop-result-room-staff');

  secrBtn = document.getElementById('secrBtn');
  barBtn = document.getElementById('barBtn');
  helpBtn = document.getElementById('helpBtn');
  cisucBtn = document.getElementById('cisucBtn');
  gapiBtn = document.getElementById('gapiBtn');
  neiBtn = document.getElementById('neiBtn');

  popProf = document.getElementById('pop-prof');
  popProfEditable = document.getElementById('pop-prof-editable');
  popSearchProf = document.getElementById('pop-search-prof');
  popResultProf = document.getElementById('pop-result-prof');
  popProfDes = document.getElementById('pop-prof-des');
  popProfDesEditable = document.getElementById('pop-prof-des-editable');
  popSearchProfDes = document.getElementById('pop-search-prof-des');
  popResultProfDes = document.getElementById('pop-result-prof-des');
  popProfInf = document.getElementById('pop-prof-inf');
  popProfInfEditable = document.getElementById('pop-prof-inf-editable');
  popSearchProfInf = document.getElementById('pop-search-prof-inf');
  popResultProfInf = document.getElementById('pop-result-prof-inf');

  popEvents = document.getElementById('pop-events');
  popEventsEditable = document.getElementById('pop-events-editable');
  popSearchEvents = document.getElementById('pop-search-events');
  popResultEvents = document.getElementById('pop-result-events');
  popEventsDes = document.getElementById('pop-events-des');
  popEventsDesEditable = document.getElementById('pop-events-des-editable');
  popSearchEventsDes = document.getElementById('pop-search-events-des');
  popResultEventsDes = document.getElementById('pop-result-events-des');
  popEventsInf = document.getElementById('pop-events-inf');
  popEventsInfEditable = document.getElementById('pop-events-inf-editable');
  popSearchEventsInf = document.getElementById('pop-search-events-inf');
  popResultEventsInf = document.getElementById('pop-result-events-inf');

  popInfo = document.getElementById('pop-info');
  popInfoEditable = document.getElementById('pop-info-editable');
  popSearchInfo = document.getElementById('pop-search-info');
  popResultInfo = document.getElementById('pop-result-info');

  piso1 = document.getElementById('Piso1');
  piso2 = document.getElementById('Piso2');

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
      $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
      $(roomBtn).css("margin-left", "0px");
      $(servBtn).css("visibility", "visible");
      $(profBtn).css("visibility", "visible");
      $(eventsBtn).css("visibility", "visible");


      $(roomDiv).fadeOut(170);
      $(popRoom).fadeOut(200);
      $(popEventsDes).fadeOut(200);
      $(popEventsInf).fadeOut(200);
      $(popEvents).fadeOut(200);
      $(popProfDes).fadeOut(200);
      $(popProfInf).fadeOut(200);
      $(popRoomClassroom).fadeOut(200);
      $(popRoomLab).fadeOut(200);
      $(popRoomAud).fadeOut(200);
    } else {
      $(roomBtn).css("margin-left", "-150px");
      $(quickBtn).animate({marginLeft: 788 +"px"}, 200);
      $(profBtn).css("visibility", "hidden");
      $(servBtn).css("visibility", "hidden");
      $(eventsBtn).css("visibility", "hidden");

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
      $(popRoomStaff).fadeOut(200);
      $(popRoomStd).fadeOut(200);
      popRoom.style.display = "block";
    }

});

$(servBtn).click(function(){
  $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
  popInfo.style.display = "none";

  if (servDiv.style.display != 'none'){
    $(servDiv).fadeOut(170);
    $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
    $(servBtn).css("margin-left", "0px");
    $(roomBtn).css("visibility", "visible");
    $(profBtn).css("visibility", "visible");
    $(eventsBtn).css("visibility", "visible");
    $('.over').css("display", "none");
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
    $(popRoomStaff).fadeOut(200);
    $(popRoomStd).fadeOut(200);
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
    $(popRoomStaff).fadeOut(200);
    $(popRoomStd).fadeOut(200);
    popEvents.style.display = "block";
  }

});

/************ LEVEL-THREE BTNS  ***************/

/************ INSIDE ROOM BTN  ***************/

/************ ROOMIN BTNS  ***************/

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
    $(popRoomStaff).fadeOut(200);
    $(popRoomStd).fadeOut(200);
    popRoomClassroom.style.display = "block";
  }

});

/************ AUD BTNS  ***************/

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
    $(popRoomStaff).fadeOut(200);
    $(popRoomStd).fadeOut(200);
    popRoomAud.style.display = "block";
  }
});

/************ LAB BTNS  ***************/

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
    $(popRoomStaff).fadeOut(200);
    $(popRoomStd).fadeOut(200);
    popRoomLab.style.display = "block";
  }

});


/************ STUDY BTNS  ***************/

$(stdBtn).click(function(){
  if (popRoomStd.style.display != 'none'){
    $(popRoomStd).fadeOut(200);
    $(popRoom).fadeIn(200);
    $(stdBtn).css("background-color", "yellow");
  } else {
    $(stdBtn).css("background-color", "pink");
    $(popRoomStd).fadeIn(200);

    $(popEventsDes).fadeOut(200);
    $(popEventsInf).fadeOut(200);
    $(popEvents).fadeOut(200);
    $(popProf).fadeOut(200);
    $(popProfDes).fadeOut(200);
    $(popProfInf).fadeOut(200);
    $(popRoom).fadeOut(200);
    $(popRoomClassroom).fadeOut(200);
    $(popRoomAud).fadeOut(200);
    $(popRoomStaff).fadeOut(200);
    popRoomStd.style.display = "block";
  }

});

/************ STAFF BTNS  ***************/

$(staffBtn).click(function(){
  if (popRoomStaff.style.display != 'none'){
    $(popRoomStaff).fadeOut(200);
    $(popRoom).fadeIn(200);
    $(staffBtn).css("background-color", "yellow");
  } else {
    $(staffBtn).css("background-color", "pink");
    $(popRoomStaff).fadeIn(200);

    $(popEventsDes).fadeOut(200);
    $(popEventsInf).fadeOut(200);
    $(popEvents).fadeOut(200);
    $(popProf).fadeOut(200);
    $(popProfDes).fadeOut(200);
    $(popProfInf).fadeOut(200);
    $(popRoom).fadeOut(200);
    $(popRoomClassroom).fadeOut(200);
    $(popRoomAud).fadeOut(200);
    $(popRoomStd).fadeOut(200);
    popRoomStaff.style.display = "block";
  }

});

/************ INSIDE SERV BTN  ***************/


/************ INSIDE PROF BTN  ***************/

/************ PROFDES BTNS  ***************/


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

/************ PROFINF BTNS  ***************/

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


/************ INSIDE EVENTS BTN  ***************/

/************ EVDES BTNS  ***************/

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

/************ EVINF BTNS  ***************/

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

function getRoom(room, sR, fR, pD){
  var rqst = $.ajax({
    type: "POST",
    url: "./getRoom.php",
    data: {room:room, sR: sR, fR: fR
    }
  }).done(function(msg) {
    $(pD).html(msg);
  });
}

function getProf(profName, courseName, sR, fR, pD){
  var rqst = $.ajax({
    type: "POST",
    url: "./getProf.php",
    data: { profName: profName, courseName: courseName, sR: sR, fR: fR
    }
  }).done(function(msg) {
    $(pD).html(msg);
  });
}

function getEvent(eventName, eventCourse, sR, fR, pD){
  var rqst = $.ajax({
    type: "POST",
    url: "./getEvent.php",
    data: { eventName: eventName, eventCourse: eventCourse, sR: sR, fR: fR
    }
  }).done(function(msg) {
    $(pD).html(msg);
  });
}

function setRoomLocation(tower, floor, block){
  popInfo.style.display = "none";
  $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
  var rqst = $.ajax({
    type: "POST",
    url: "./roomLocation.php",
    data: {tower: tower, floor: floor, block: block
    }
  }).done(function(data) {
    var array_data = String(data).split(",");
    var l = array_data[0];
    var t = array_data[1];
    var z = array_data[2];
    var n = array_data[3];
    $('#x').text("X: Torre " + tower + " / ");
    $('#y').text("Y: Piso " + floor + " / ");
    $('#z').text("Z: "+ n);
    setTimeout(function() {
      $('#map-image').animate({left: l, top: t, zoom: z}, 200);
    },
    2000);
    setTimeout(function(){
      popInfo.style.display = "block";
      getInfo(tower, floor, block, popSearchInfo, popResultInfo, popInfoEditable);

    }, 2200);
  });
}

function getInfo(tower, floor, block, sR, fR, pD){
  var rqst = $.ajax({
    type: "POST",
    url: "./getInfo.php",
    data: { tower: tower, floor: floor, block: block
    }
  }).done(function(msg) {
    $(pD).html(msg);
  });
}


});
