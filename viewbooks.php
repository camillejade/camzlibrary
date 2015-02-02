<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'camzlibrary';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

echo "<table border='1'><th>#</th><th>Title</th><th>Author</th><th>Publish Date</th>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		echo "<tr><td><input name='checkbox[]' type='checkbox' id='checkbox[]' value='".$row['bookid']."'></td><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['pubdate']."</td></tr>";
	}
}

echo "</table>";
mysqli_close($conn);
?>