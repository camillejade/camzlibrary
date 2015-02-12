<?php

include('session.php');
include('connect.php');

$user = $_POST['username'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password, fname, lname, address, contact, email) VALUES('$user', 'pass', '$fname', '$lname', '$address', '$contact', '$email')";
$result = mysql_query($sql);

if(!$result){	
	echo "error in adding user";	
}
else{
	echo "user successfully added<br>";
	echo "<a href='viewusers.php'>Back to View Users</a>";
}

?>