<?php
include('session.php');
include('connect.php');

$tbl_name="books";
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$pubdate = $_POST['pubdate'];
$availability = $_POST['availability'];
$copies = $_POST['copies'];

$sql="UPDATE $tbl_name SET title='$title', author='$author', pubdate='$pubdate', availability='$availability', copies='$copies' WHERE bookid='$id'";
$result=mysql_query($sql);

if($result){
	echo "Successful";
	echo "<br>";
	echo "<a href='viewbooks.php'>View result</a>";
}
else{
	echo "Cannot update record";
}
?> 