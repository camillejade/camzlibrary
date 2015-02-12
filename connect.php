<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysql_connect($servername, $username, $password);

if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$db_name="camzlibrary"; 
mysql_select_db("$db_name")or die("Cannot select DB");
?>