<?php
include('session.php');
include('connect.php');

$tbl_name="users";

$id = $_POST['id'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$sql="UPDATE $tbl_name SET fname='$fname', lname='$lname', address='$address', contact='$contact', email='$email' WHERE id='$id'";
$result=mysql_query($sql);

if($result){
	echo "Successful";
	echo "<br>";
	echo "<a href='viewusers.php'>View result</a>";
}
else {
	echo "ERROR";
}
?> 