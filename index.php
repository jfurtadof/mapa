<?php
require('core.php');
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>Mapa do DEI</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script language="JavaScript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
  <script src="js/functions.js"></script>

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

      <span id="roomDiv" class="more-levels level-three" style="display:none; margin-left: 383px;">
        <a class="nav-a"><img class="nav-a-img three" id="roomInBtn" src="img/cpuIn.png"></a>
        <a class="nav-a"><img class="nav-a-img three" id="audBtn" src="img/drive.png"></a>
        <a class="nav-a"><img class="nav-a-img three" id="labBtn" src="img/laptop.png"></a>
        <a class="nav-a"><img class="nav-a-img three" id="stdBtn" src="img/printer.png"></a>
        <a class="nav-a"><img class="nav-a-img three" id="staffBtn" src="img/arrowkeys.png"></a>
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


    <!--PROCURA POR 'ROOM' ALL-->
    <div id="pop-room" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-editable">
        <div id="pop-search-room" class="pop-search">
        </div>
        <div id="pop-result-room" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-link-all ";
            echo $r["room"];
            echo "'>";
            echo $r["room"];
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles-room">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles-room">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>

    <!--PROCURA POR 'CLASSROOM'-->
    <div id="pop-room-classroom" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-classroom-editable">
        <div id="pop-search-room-classroom" class="pop-search">
        </div>
        <div id="pop-result-room-classroom" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms WHERE typology = 'classroom'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-classroom' id='";
            echo $r["room"];
            echo "' href='#'>";
            echo $r["room"];
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles-room">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles-room">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>

    <!--PROCURA POR 'AMPHITHEATER'-->
    <div id="pop-room-aud" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-aud-editable">
        <div id="pop-search-room-aud" class="pop-search">
        </div>
        <div id="pop-result-room-aud" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms WHERE typology = 'amphitheater'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-aud' id='";
            echo $r["room"];
            echo "' href='#'>";
            echo $r["room"];
            echo " (";
            echo $r["name"];
            echo ")";
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>

    <!--PROCURA POR 'LABORATORY'-->
    <div id="pop-room-lab" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-lab-editable">
        <div id="pop-search-room-lab" class="pop-search">
        </div>
        <div id="pop-result-room-lab" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms WHERE typology = 'laboratory'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-lab' id='";
            echo $r["room"];
            echo "' href='#'>";
            echo $r["room"];
            echo " (";
            echo $r["name"];
            echo ")";
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>


    <!--PROCURA POR 'STUDY'-->
    <div id="pop-room-std" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-std-editable">
        <div id="pop-search-room-std" class="pop-search">
        </div>
        <div id="pop-result-room-std" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms WHERE typology = 'study room'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-std' id='";
            echo $r["room"];
            echo "' href='#'>";
            echo $r["room"];
            echo " (";
            echo $r["name"];
            echo ")";
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>

    <!--PROCURA POR 'STAFF'-->
    <div id="pop-room-staff" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-room-staff-editable">
        <div id="pop-search-room-staff" class="pop-search">
        </div>
        <div id="pop-result-room-staff" class="pop-result">
          <?php
          $q = "SELECT * FROM rooms WHERE typology = 'staff'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-room-staff' id='";
            echo $r["room"];
            echo "' href='#'>";
            echo $r["room"];
            echo " (";
            echo $r["name"];
            echo ")";
            echo '</a></p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <p class="pop-titles">TORRE</p>
        <span class="pop-choose tower" style="cursor:pointer">A</span>
        <span class="pop-choose tower" style="cursor:pointer">B</span>
        <span class="pop-choose tower" style="cursor:pointer">C</span>
        <span class="pop-choose tower" style="cursor:pointer">D</span>
        <span class="pop-choose tower" style="cursor:pointer">E</span>
        <span class="pop-choose tower" style="cursor:pointer">F</span>
        <span class="pop-choose tower" style="cursor:pointer">G</span>
        <p class="pop-titles">PISO</p>
        <span class="pop-choose floor" style="cursor:pointer">0</span>
        <span class="pop-choose floor" style="cursor:pointer">1</span>
        <span class="pop-choose floor" style="cursor:pointer">2</span>
        <span class="pop-choose floor" style="cursor:pointer">3</span>
        <span class="pop-choose floor" style="cursor:pointer">4</span>
        <span class="pop-choose floor" style="cursor:pointer">5</span>
        <span class="pop-choose floor" style="cursor:pointer">6</span>
      </div>
    </div>

    <!--PROCURA POR 'PROFS' ALL-->
    <div id="pop-prof" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-prof-editable">
        <div id="pop-search-prof" class="pop-search">
        </div>
        <div id="pop-result-prof" class="pop-result">
          <?php
          $q = "SELECT * FROM teachers";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo '<p>';
            echo $r["teacher_name"];
            echo '</p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'PROFS' DESIGN-->
    <div id="pop-prof-des" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-prof-des-editable">
        <div id="pop-search-prof-des" class="pop-search">
        </div>
        <div id="pop-result-prof-des" class="pop-result">
          <?php
          $q = "SELECT * FROM teachers WHERE teacher_course='2'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo '<p>';
            echo $r["teacher_name"];
            echo '</p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'PROFS' INFORMÁTICA-->
    <div id="pop-prof-inf" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-prof-inf-editable">
        <div id="pop-search-prof-inf" class="pop-search">
        </div>
        <div id="pop-result-prof-inf" class="pop-result">
          <?php
          $q = "SELECT * FROM teachers WHERE teacher_course='1'";
          $s = mysql_query($q);
          while($r = mysql_fetch_assoc($s)){
            echo '<p>';
            echo $r["teacher_name"];
            echo '</p>';
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'EVENTS' ALL-->
    <div id="pop-events" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-events-editable">
        <div id="pop-search-events" class="pop-search">
        </div>
        <div id="pop-result-events" class="pop-result">
          <?php
          $q = "SELECT * FROM events";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-event-";
            if ($r["event_course"] == '1'){
              echo "inf";
            } else if ($r["event_course"] == '2'){
              echo "des";
            } else if ($r["event_course"] == '3'){
              echo "both";
            } else{
              echo "all";
            }


            echo "' id='event-";
            echo $r["event_id"];
            echo "'href='#'>";
            echo $r["event_name"];
            echo "</a></p>";
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'EVENTS' DESIGN-->
    <div id="pop-events-des" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-events-des-editable">
        <div id="pop-search-events-des" class="pop-search">
        </div>
        <div id="pop-result-events-des" class="pop-result">
          <?php
          $q = "SELECT * FROM events WHERE event_course='2'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-event-";
            if ($r["event_course"] == '1'){
              echo "inf";
            } else if ($r["event_course"] == '2'){
              echo "des";
            } else if ($r["event_course"] == '3'){
              echo "both";
            } else{
              echo "all";
            }

            echo "' id='event-";
            echo $r["event_id"];
            echo "'href='#'>";
            echo $r["event_name"];
            echo "</a></p>";
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'EVENTS' INFORMÁTICA-->
    <div id="pop-events-inf" class="pop" style="display:none;">
      <span style="float:right; margin-right: 15px; margin-top: 15px; cursor: pointer;"><img class="delBtn" src="img/back.png"></span>
      <div id="pop-events-inf-editable">
        <div id="pop-search-events-inf" class="pop-search">
        </div>
        <div id="pop-result-events-inf" class="pop-result">
          <?php
          $q = "SELECT * FROM events WHERE event_course='1'";
          $s = mysql_query($q);

          while($r = mysql_fetch_assoc($s)){
            echo "<p><a class='pop-event-";
            if ($r["event_course"] == '1'){
              echo "inf";
            } else if ($r["event_course"] == '2'){
              echo "des";
            } else if ($r["event_course"] == '3'){
              echo "both";
            } else{
              echo "all";
            }

            echo "' id='event-";
            echo $r["event_id"];
            echo "'href='#'>";
            echo $r["event_name"];
            echo "</a></p>";
          }
          ?>
        </div>
      </div>
      <div class="pop-buttons">
        <span class="pop-choose alphabet" style="cursor:pointer">A</span>
        <span class="pop-choose alphabet" style="cursor:pointer">B</span>
        <span class="pop-choose alphabet" style="cursor:pointer">C</span>
        <span class="pop-choose alphabet" style="cursor:pointer">D</span>
        <span class="pop-choose alphabet" style="cursor:pointer">E</span>
        <span class="pop-choose alphabet" style="cursor:pointer">F</span>
        <span class="pop-choose alphabet" style="cursor:pointer">G</span>
        <span class="pop-choose alphabet" style="cursor:pointer">H</span>
        <span class="pop-choose alphabet" style="cursor:pointer">I</span>
        <span class="pop-choose alphabet" style="cursor:pointer">J</span>
        <span class="pop-choose alphabet" style="cursor:pointer">K</span>
        <span class="pop-choose alphabet" style="cursor:pointer">L</span>
        <span class="pop-choose alphabet" style="cursor:pointer">M</span>
        <span class="pop-choose alphabet" style="cursor:pointer">N</span>
        <span class="pop-choose alphabet" style="cursor:pointer">O</span>
        <span class="pop-choose alphabet" style="cursor:pointer">P</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Q</span>
        <span class="pop-choose alphabet" style="cursor:pointer">R</span>
        <span class="pop-choose alphabet" style="cursor:pointer">S</span>
        <span class="pop-choose alphabet" style="cursor:pointer">T</span>
        <span class="pop-choose alphabet" style="cursor:pointer">U</span>
        <span class="pop-choose alphabet" style="cursor:pointer">V</span>
        <span class="pop-choose alphabet" style="cursor:pointer">W</span>
        <span class="pop-choose alphabet" style="cursor:pointer">X</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Y</span>
        <span class="pop-choose alphabet" style="cursor:pointer">Z</span>
      </div>
    </div>

    <!--PROCURA POR 'ROOM' ALL-->
    <div id="pop-info" class="pop" style="display:none;">
      <div id="pop-info-editable">
        <div id="pop-search-info" style="width: 339px;"class="pop-search">
        </div>
        <div id="pop-result-info" style="width: 339px;" class="pop-result">
        </div>
      </div>
    </div>

    <div id="map">
      <div id="map-image">
        <?php
        require('./svg.php');
        ?>
      </div>
    </div>
  </body>
  </html>
