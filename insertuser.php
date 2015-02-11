<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'camzlibrary';

$conn = mysql_connect($servername, $username, $password);


if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$user = $_POST['username'];
$fname = $_POST['name'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

mysql_select_db($dbname);
$sql = "INSERT INTO users (username, password, fname, lname, address, contact, email) VALUES('$user', 'pass', '$fname', '$lname', '$address', '$contact', '$email')";
$result = mysql_query($sql);

if(!$result)
{
echo "error in adding user";
	
}
else
{
	echo "user successfully added<br>";
	echo "<a href='viewusers.php'>Back to View Users</a>";
}

?>