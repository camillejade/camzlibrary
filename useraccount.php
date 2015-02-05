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
$userhere = $_SESSION['login_user'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$sql = "SELECT * FROM borrowlog where userid = '$userhere'";
$result = mysqli_query($conn, $sql);

echo "<table border='1'><th>#</th><th>Title</th><th>Author</th><th>Status</th><th>Due Date</th><th>Fine</th>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		for($i=1; $i<=$row; $i++)
		{
		echo "<tr><td>".$i."</td><td>".$row['booktitle']."</td><td>".$row['author']."</td><td>".$row['status']."</td><td>".$row['duedate']."</td><td>".$row['fine']."</td></tr>";
		}
	}

}
echo "</table>";
echo "<a href='userhome.php'>Back</a>";
?>