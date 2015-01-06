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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "";
      var sR = $(popSearchRoom).attr('id');
      var fR = $(popResultRoom).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomEditable);
    });

    $(delBtn).click(function(){
      var typology = '';
      var inputTower = '';
      var inputFloor = '';
      var sR = $(popSearchRoom).attr('id');
      var fR = $(popResultRoom).attr('id');

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomEditable);
    });

  });

  $(servBtn).click(function(){
    popInfo.style.display = "none";

    if (servDiv.style.display != 'none'){
      $(servDiv).fadeOut(170);
      $(quickBtn).animate({marginLeft: 513 +"px"}, 200);
      $(servBtn).css("margin-left", "0px");
      $(roomBtn).css("visibility", "visible");
      $(profBtn).css("visibility", "visible");
      $(eventsBtn).css("visibility", "visible");
      $('.over').css("display", "none");

      $('#map-image').animate({left: "-250px", zoom: "100%", top: "-2500px"}, 200);
      $('#servicos').fadeOut(500);
      $('#servicos').css("display", "none");
    } else {
      $(servBtn).css("margin-left", "-540px");
      $(quickBtn).animate({marginLeft: $(servBtn).offset().left + 713 +"px"}, 200);
      $(roomBtn).css("visibility", "hidden");
      $(profBtn).css("visibility", "hidden");
      $(eventsBtn).css("visibility", "hidden");
      $(servDiv).fadeIn(200);
      servDiv.style.display = "block";

      $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
      $('#servicos').fadeIn(500);
      $('#servicos').css("display", "inline");
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

      $('#map-image').animate({left: "-250px", zoom: "100%", top: "-2500px"}, 200);
      $('#gabinetes').fadeOut(500);
      $('#gabinetes').css("display", "none");
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

      $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
      $('#gabinetes').fadeIn(500);
      $('#gabinetes').css("display", "inline");
    }

    var profName = '';
    var courseName = '';

    $('.pop-choose').click(function(){
      var sR = $(popSearchProf).attr('id');
      var fR = $(popResultProf).attr('id');

      profName += $(this).text();
      profName = profName.charAt(0).toUpperCase() + profName.substr(1).toLowerCase();
      getProf(profName, courseName, sR, fR, popProfEditable);
    });

    $(delBtn).click(function(){
      var profName = '';
      var courseName = '';
      var sR = $(popSearchProf).attr('id');
      var fR = $(popResultProf).attr('id');

      getProf(profName, courseName, sR, fR, popProfEditable);
    });
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

    var eventName = '';
    var eventCourse = '';

    $('.pop-choose').click(function(){
      var sR = $(popSearchEvents).attr('id');
      var fR = $(popResultEvents).attr('id');

      eventName += $(this).text();
      eventName = eventName.charAt(0).toUpperCase() + eventName.substr(1).toLowerCase();
      getEvent(eventName, eventCourse, sR, fR, popEventsEditable);
    });

    $(delBtn).click(function(){
      var eventName = '';
      var eventCourse = '';
      var sR = $(popSearchEvents).attr('id');
      var fR = $(popResultEvents).attr('id');

      getEvent(eventName, eventCourse, sR, fR, popEventsEditable);
      alert(eventName);
      alert(eventName);
    });

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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "classroom";
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomClassroomEditable);
    });

    $(delBtn).click(function(){
      var inputValue = '';
      var inputTower = '';
      var typology = '';
      var sR = $(popSearchRoomClassroom).attr('id');
      var fR = $(popResultRoomClassroom).attr('id');

      getRoom(inputValue, inputTower, typology, sR, fR, popRoomClassroomEditable);
    });

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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "amphitheater";
      var sR = $(popSearchRoomAud).attr('id');
      var fR = $(popResultRoomAud).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomAudEditable);
    });

    $(delBtn).click(function(){
      var inputValue = '';
      var inputTower = '';
      var typology = '';
      var sR = $(popSearchRoomAud).attr('id');
      var fR = $(popResultRoomAud).attr('id');

      getRoom(inputValue, inputTower, typology, sR, fR, popRoomAudEditable);
    });

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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "laboratory";
      var sR = $(popSearchRoomLab).attr('id');
      var fR = $(popResultRoomLab).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomLabEditable);
    });

    $(delBtn).click(function(){
      var inputValue = '';
      var inputTower = '';
      var typology = '';
      var sR = $(popSearchRoomLab).attr('id');
      var fR = $(popResultRoomLab).attr('id');

      getRoom(inputValue, inputTower, typology, sR, fR, popRoomLabEditable);
    });

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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "study room";
      var sR = $(popSearchRoomStd).attr('id');
      var fR = $(popResultRoomStd).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomStdEditable);
    });

    $(delBtn).click(function(){
      var inputValue = '';
      var inputTower = '';
      var typology = '';
      var sR = $(popSearchRoomStd).attr('id');
      var fR = $(popResultRoomStd).attr('id');

      getRoom(inputValue, inputTower, typology, sR, fR, popRoomStdEditable);
    });

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

    var inputValue = '';
    var inputTower = '';
    var inputFloor = '';

    $('.pop-choose').click(function(){
      var typology = "staff";
      var sR = $(popSearchRoomStaff).attr('id');
      var fR = $(popResultRoomStaff).attr('id');

      inputValue = $(this).text();
      if (inputValue == 'A' || inputValue == 'B' || inputValue == 'C' || inputValue == 'D' || inputValue == 'E' || inputValue == 'F' || inputValue == 'G'){
        inputTower = inputValue;
      }
      if (inputValue == '0' || inputValue == '1' || inputValue == '2' || inputValue == '3' || inputValue == '4' || inputValue == '5' || inputValue == '6'){
        inputFloor = inputValue;
      }

      getRoom(inputTower, inputFloor, typology, sR, fR, popRoomStaffEditable);
    });

    $(delBtn).click(function(){
      var inputValue = '';
      var inputTower = '';
      var typology = '';
      var sR = $(popSearchRoomStaff).attr('id');
      var fR = $(popResultRoomStaff).attr('id');

      getRoom(inputValue, inputTower, typology, sR, fR, popRoomStaffEditable);
    });

  });

  /************ INSIDE SERV BTN  ***************/

  $(secrBtn).click(function(){
    popInfo.style.display = "block";
    $('#servicos').css('display', 'none');
    $('#sala_D11').css('display', 'inline');
    $('#sala_D14').css('display', 'none');
    $('#sala_F14').css('display', 'none');


    setRoomLocation('D1.1');
  });

  $(gapiBtn).click(function(){
    popInfo.style.display = "block";
    $('#servicos').css('display', 'none');
    $('#sala_D14').css('display', 'inline');
    $('#sala_D11').css('display', 'none');
    $('#sala_F14').css('display', 'none');

    setRoomLocation('D1.4');
  });

  $(cisucBtn).click(function(){
    popInfo.style.display = "block";
    $('#servicos').css('display', 'none');
    $('#sala_F14').css('display', 'inline');
    $('#sala_D11').css('display', 'none');
    $('#sala_D14').css('display', 'none');

    setRoomLocation('F1.4');
  });

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

    var profName = '';
    var courseName = '2';

    $('.pop-choose').click(function(){
      var sR = $(popSearchProfDes).attr('id');
      var fR = $(popResultProfDes).attr('id');

      profName += $(this).text();
      profName = profName.charAt(0).toUpperCase() + profName.substr(1).toLowerCase();
      getProf(profName, courseName, sR, fR, popProfDesEditable);
    });

    $(delBtn).click(function(){
      var profName = '';
      var courseName = '';
      var sR = $(popSearchProfDes).attr('id');
      var fR = $(popResultProfDes).attr('id');

      getProf(profName, courseName, sR, fR, popProfDesEditable);
    });

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

    var profName = '';
    var courseName = '1';

    $('.pop-choose').click(function(){
      var sR = $(popSearchProfInf).attr('id');
      var fR = $(popResultProfInf).attr('id');

      profName += $(this).text();
      profName = profName.charAt(0).toUpperCase() + profName.substr(1).toLowerCase();
      getProf(profName, courseName, sR, fR, popProfInfEditable);
    });

    $(delBtn).click(function(){
      var profName = '';
      var courseName = '';
      var sR = $(popSearchProfInf).attr('id');
      var fR = $(popResultProfInf).attr('id');

      getProf(profName, courseName, sR, fR, popProfInfEditable);
    });

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


    var eventName = '';
    var eventCourse = '2';

    $('.pop-choose').click(function(){
      var sR = $(popSearchEventsDes).attr('id');
      var fR = $(popResultEventsDes).attr('id');

      eventName += $(this).text();
      eventName = eventName.charAt(0).toUpperCase() + eventName.substr(1).toLowerCase();
      getEvent(eventName, eventCourse, sR, fR, popEventsEditableDes);
    });

    $(delBtn).click(function(){
      var eventName = '';
      var eventCourse = '';
      var sR = $(popSearchEventsDes).attr('id');
      var fR = $(popResultEventsDes).attr('id');

      getEvent(eventName, eventCourse, sR, fR, popEventsEditableDes);
    });
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


    var eventName = '';
    var eventCourse = '1';

    $('.pop-choose').click(function(){
      var sR = $(popSearchEventsInf).attr('id');
      var fR = $(popResultEventsInf).attr('id');

      eventName += $(this).text();
      eventName = eventName.charAt(0).toUpperCase() + eventName.substr(1).toLowerCase();
      getEvent(eventName, eventCourse, sR, fR, popEventsEditableInf);
    });

    $(delBtn).click(function(){
      var eventName = '';
      var eventCourse = '';
      var sR = $(popSearchEventsInf).attr('id');
      var fR = $(popResultEventsInf).attr('id');

      getEvent(eventName, eventCourse, sR, fR, popEventsEditableInf);
    });

  });

  $('.pop-prof-link').click(function(){
    //alert(this.id);
    setProfLocation(this.id);
  });

  function getRoom(towerValue, floorValue, typology, sR, fR, pD){
    var rqst = $.ajax({
      type: "POST",
      url: "./getRoom.php",
      data: { towerValue: towerValue, floorValue: floorValue, typology: typology, sR: sR, fR: fR
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

  function setRoomLocation(room){
    popInfo.style.display = "none";
    $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
    var rqst = $.ajax({
      type: "POST",
      url: "./roomLocation.php",
      data: { room:room
      }
    }).done(function(data) {
      var array_data = String(data).split(",");
      var l = array_data[0];
      var t = array_data[1];
      var z = array_data[2];
      var tower = array_data[3];
      var floor = array_data[4];
      var n = array_data[5];

      $('#x').text("X: Torre " + tower + " / ");
      $('#y').text("Y: Piso " + floor + " / ");
      $('#z').text("Z: "+ n);
      setTimeout(function() {
        $('#map-image').animate({left: l, top: t, zoom: z}, 200);
      },
      1000);
      setTimeout(function(){
        popInfo.style.display = "block";
        var sR = $(popSearchInfo).attr('id');
        var fR = $(popResultInfo).attr('id');
        //var pD = $(popInfoEditable).attr('id');

        getInfo(room, sR, fR, popInfoEditable);

      }, 1200);
    });
  }

  function getInfo(room, sR, fR, pD){
    var rqst = $.ajax({
      type: "POST",
      url: "./getInfo.php",
      data: { room:room, sR: sR, fR: fR
      }
    }).done(function(msg) {
      $(popInfoEditable).html(msg);
    });
  }


  function setProfLocation(id){
    popInfo.style.display = "none";
    $('#map-image').animate({top: "-100px", zoom: "25%", left: "200px"}, 200);
    var rqst = $.ajax({
      type: "POST",
      url: "./profLocation.php",
      data: { id:id
      }
    }).done(function(data) {

      var array_data = String(data).split(",");
      var l = array_data[0];
      var t = array_data[1];
      var z = array_data[2];
      var tower = array_data[3];
      var floor = array_data[4];
      var rm = array_data[5];
      var tid = array_data[6];
      $('#x').text("X: Torre " + tower + " / ");
      $('#y').text("Y: Piso " + floor + " / ");
      $('#z').text("Z: "+ rm);
      setTimeout(function() {
        $('#map-image').animate({left: l, top: t, zoom: z}, 200);
      },
      1500);
      setTimeout(function(){
        popInfo.style.display = "block";
        alert(tid);
        var sR = $(popSearchInfo).attr('id');
        var fR = $(popResultInfo).attr('id');

        getInfoProf(tid, sR, fR, popInfoEditable);

      }, 2200);
    });
  }


  function getInfoProf(tid, sR, fR, pD){
    var rqst = $.ajax({
      type: "POST",
      url: "./getInfoProf.php",
      data: { tid:tid, sR: sR, fR: fR
      }
    }).done(function(msg) {
      $(popInfoEditable).html(msg);
    });
  }


});
