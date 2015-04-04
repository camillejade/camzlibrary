<?php
include('session.php');
include('connect.php');

$bookid =  $_GET['bookid'];
$id = $_GET['id'];
$sql = "DELETE FROM borrowlog where userid = '$id' and bookid = '$bookid'";
$result = mysql_query($sql);

if($result)
{
	echo "Book successfully returned.";
	echo "<a href = 'librarianhome.php'>Return to Home</a>";
}
else
{
	echo "Book NOT returned.";
	echo "<a href = 'librarianhome.php'>Return to Home</a>";
}

?>