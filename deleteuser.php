<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}

$host="localhost";
$username="root";
$password="";
$db_name="camzlibrary"; 
$tbl_name="users";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("Cannot select DB");

$id = $_GET['id'];

// update data in mysql database 
 $sql="DELETE FROM $tbl_name WHERE id='$id'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
 echo "Record deleted.";
 echo "<BR>";
 echo "<a href='viewusers.php'>View result</a>";
 }

 else {
 echo "ERROR";
 }

 ?>