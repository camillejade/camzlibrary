<?php 
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}

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

echo "<table border='2'><th>Title</th>
<th>Author</th>
<th>Date Published</th>
<th>Availability</th>
<th>Copies</th>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		echo "<tr><td>".$row['title']."</td>
		<td>".$row['author']."</td>
		<td>".$row['pubdate']."</td>
		<td>".$row['availability']."</td>
		<td>".$row['copies']."</td>
		<td><a href=updatebook.php?bookid=".$row['bookid'].">Update</a></td>
		<td><a href=deletebook.php?bookid=".$row['bookid'].">Delete</a></td></tr>";
	}
	
}

echo "</table>";
echo "<a href='adminhome.php'>Back to Home</a>";
mysqli_close($conn);
?>