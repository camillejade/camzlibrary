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

$title = $_POST['title'];
$author = $_POST['author'];
$pubdate = $_POST['pubdate'];
$copies = $_POST['copies'];

mysql_select_db($dbname);
$sql = "INSERT INTO books (title, author, pubdate, availability, copies) VALUES('$title',  '$author', CAST('$pubdate' AS DATE), 'yes', $copies)";
$result = mysql_query($sql);

if(!$result)
{
echo "error in adding book";
	
}
else
{
	echo "book successfully added<br>";
	echo "<a href='viewbooks.php'>Back to View Books</a>";
}

?>