<?php
include('session.php');
include('connect.php');

$title = $_POST['title'];
$author = $_POST['author'];
$pubdate = $_POST['pubdate'];
$copies = $_POST['copies'];

$sql = "INSERT INTO books (title, author, pubdate, availability, copies) VALUES('$title',  '$author', CAST('$pubdate' AS DATE), 'yes', $copies)";
$result = mysql_query($sql);

if(!$result){
	echo "error in adding book";	
}
else{
	echo "book successfully added<br>";
	echo "<a href='viewbooks.php'>Back to View Books</a>";
}
?>