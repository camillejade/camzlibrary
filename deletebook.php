<?php
include('session.php');
include('connect.php');

$bookid = $_GET['bookid'];
$tbl_name="books";
$sql="DELETE FROM $tbl_name WHERE bookid='$bookid'";
$result=mysql_query($sql);

if($result){
	echo "Record deleted.";
	echo "<BR>";
	echo "<a href='viewbooks.php'>Back to View Books</a>";
}
else {
	echo "ERROR";
}
?>