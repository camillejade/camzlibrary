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


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("Cannot select DB");

$bookid = $_GET['bookid'];

// update data in mysql database 
$tbl_name="books";
 $sql="DELETE FROM $tbl_name WHERE bookid='$bookid'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
 echo "Record deleted.";
 echo "<BR>";
 echo "<a href='viewbooks.php'>Back to View Books</a>";
 }

 else {
 echo "ERROR";
 }

 ?>