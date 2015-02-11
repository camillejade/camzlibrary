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

$id = $_POST['id'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];

// update data in mysql database 
 $sql="UPDATE $tbl_name SET fname='$fname', lname='$lname', address='$address', contact='$contact', email='$email' WHERE id='$id'";
 $result=mysql_query($sql);

// if successfully updated. 
 if($result){
 echo "Successful";
 echo "<BR>";
 echo "<a href='viewusers.php'>View result</a>";
 }

 else {
 echo "ERROR";
 }

 ?> 