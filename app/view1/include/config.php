<?php 
$mysql_host = "localhost";
$mysql_database = "wifimonkey";
$mysql_user = "root";
$mysql_password = "";

$db = @mysql_connect("$mysql_host", "$mysql_user", "$mysql_password")or die("Cannot connect to the server!"); 
@mysql_select_db($mysql_database)or die(mysql_error($db));
?>