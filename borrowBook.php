<?php
include('session.php');
include('connect.php');
$id= $_GET['id'];
$bookid = $_GET['bookid'];
 
$sql3 = "SELECT * FROM borrowlog where userid = '$id' AND bookid = '$bookid'";
$result = mysql_query($sql3);

if(mysql_num_rows($result)>0)
{
	echo "Record exists";
	echo "<br><a href='librarianhome.php'>Return to home</a>";
}
else
{
	$sql4 = "insert into borrowlog(userid, bookid, duedate) values ($id, $bookid, now())";
	$result2 = mysql_query($sql4);
	$sql5 = "update books set availability = 'no' where bookid = '$bookid'";
	$result3 = mysql_query($sql5);
	echo "<a href='librarianhome.php'>Return to home</a>";
}
 //insert into 
//INSERT SA TABLE NA BORROWLOGS
//UPDATE COUNT SA BOOKS

?>