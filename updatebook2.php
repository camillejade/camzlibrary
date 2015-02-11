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
$tbl_name="books";

// Connect to server and select database.
 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("Cannot select DB");

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$pubdate = $_POST['pubdate'];
$availability = $_POST['availability'];
$copies = $_POST['copies'];

// update data in mysql database 
 $sql="UPDATE $tbl_name SET title='$title', author='$author', pubdate='$pubdate', availability='$availability', copies='$copies' WHERE bookid='$id'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
 echo "Successful";
 echo "<BR>";
 echo "<a href='viewbooks.php'>View result</a>";
 }

 else {
 echo "ERROR";
 }

 ?> 