<?php
require('core.php');

if (isset($_POST['torreValue'])){

$torreValue=$_POST['torreValue'];

$result=mysql_query("SELECT * FROM rooms WHERE typology = 'classroom'AND torre = '$torreValue' ");

$dados=mysql_fetch_array($result);

$nome=$dados[name];

echo "<p>OK</p>";
} else {
  echo "<p>torreValue not sent</p>";
}
//echo "<div id='titulo'><p>$nome</p></div>";
//echo "<div id='caixas'>"
        /*<p>Gabinete D.1.1<p>
        <p>  </p>
        <p><b>Horário de Funcionamento</b></p>
        <p>De Segunda a Sexta das 09h - 17:00</p>
        <p><b>Contactos:</b></p>
        <p>Lucinda Quadros</p>
        <p>Manuela Carrão</p>
        <p><b>e-mail:<b></p>
        <p>secretaria @ dei.uc.pt</p>
        <p><b>Tel:</b></p>
        <p>(+351) 239 790 000</p> */
//echo "</div>";
        // <button id="botao" class="centrar"> Direcções</button>
?>
