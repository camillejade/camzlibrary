<?php
include('session.php');
include('connect.php');

$tbl_name="borrowlog";
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$pubdate = $_POST['pubdate'];
$availability = $_POST['availability'];
$copies = $_POST['copies'];

$sql="INSERT INTO $tbl_name(userid, username, bookid, booktitle, duedate, status, fine) VALUES()";
$result=mysql_query($sql);

if($result){
	echo "Successful";
	echo "<br>";
	echo "<a href='useraccount.php'>View books</a>";
}
else{
	echo "Cannot update record";
}
?> 