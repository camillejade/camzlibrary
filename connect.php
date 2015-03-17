<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysql_connect($servername, $username, $password);
$db_name = 'camzlibrary'; 

if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$select_db = mysql_select_db($db_name); 

if (!$select_db){ 
	die("Database Selection Failed" . mysql_error()); 
} 

?>