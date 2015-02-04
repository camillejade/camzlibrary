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

echo "<table border='1'><th>#</th><th>Username</th><th>First Name</th>";

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		echo "<tr><td><input name='checkbox[]' type='checkbox' id='checkbox[]' value='".$row['id']."'></td><td>".$row['username']."</td><td>".$row['fname']."</td></tr>";
	}

	echo "<tr><td><input name='delete' type='submit' value='delete' id='delete'></td></tr>";
}

if(isset($_POST['delete']))
{
	for($i=0; $i<mysqli_num_rows($result);$i++)
	{
		$del_id = $checkbox[$i];
		$sql2 = "DELETE FROM users WHERE id=$del_id";
		$result2 = mysqli_query($conn, $sql2);
		if($result2)
		{
			echo "<meta http-equiv=\"refresh\" content=\"0; URL=viewusers.php\">";
		}
	}
}

echo "</table>";
mysqli_close($conn);
?>