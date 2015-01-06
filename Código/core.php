<?php
$dbhost = '127.0.0.1:8889';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$db_found = mysql_select_db('dei');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
} else  {
  mysql_query('SET character_set_client=utf8');
  mysql_query('SET character_set_results=utf8');
}

?>
