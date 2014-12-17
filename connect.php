<?php
$dbhost = '127.0.0.1:8889';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$db_found = mysql_select_db('deiTeste');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
} else  {
}

?>
