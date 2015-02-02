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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<table><th><tr><td>Username</td><td>First Name</td></tr>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		echo "<tr><td>".$row['username']."</td><td>".$row['fname']."</td></tr>";
	}
}

echo "</table>";
mysqli_close($conn);
?>