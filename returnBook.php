<?php
include('session.php');
include('connect.php');

$bookid =  $_GET['bookid'];
$id = $_GET['id'];
$sql = "DELETE FROM borrowlog where userid = '$id' and bookid = '$bookid'";
$result = mysql_query($sql);

if($result)
{

	$sql5 = "update books set availability = 'yes' where bookid = '$bookid'";
	$result3 = mysql_query($sql5);
	if($result3)
	{
			echo "Book successfully returned.";
	}
	echo "<a href = 'librarianhome.php'>Return to Home</a>";
}
else
{
	echo "Book NOT returned.";
	echo "<a href = 'librarianhome.php'>Return to Home</a>";
}

?>