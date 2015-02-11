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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<table border='2'><th>Username</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Contact</th>
<th>Email</th>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		echo "<tr><td>".$row['username']."</td>
		<td>".$row['fname']."</td>
		<td>".$row['lname']."</td>
		<td>".$row['address']."</td>
		<td>".$row['contact']."</td>
		<td>".$row['email']."</td>
		<td><a href=updateusers.php?id=".$row['id'].">Update</a></td>
		<td><a href=deleteuser.php?id=".$row['id'].">Delete</a></td></tr>";
	}
	
}

echo "</table>";
echo "<a href='adminhome.php'>Back to Home</a>";
mysqli_close($conn);
?>