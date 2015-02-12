<?php
include('session.php');
include('connect.php');

$userhere = $_SESSION['login_user'];
$sql = "SELECT * FROM borrowlog where userid = '$userhere'";
$result = mysql_query($sql);


if(mysql_num_rows($result)>0)
{
	while($row = mysql_fetch_assoc($result))
	{	
	echo "<table border='1'><th>#</th><th>Title</th><th>Author</th><th>Status</th><th>Due Date</th><th>Fine</th>";
		for($i=1; $i<=$row; $i++)
		{
			echo "<tr><td>".$i."</td><td>".$row['booktitle']."</td><td>".$row['author']."</td><td>".$row['status']."</td><td>".$row['duedate']."</td><td>".$row['fine']."</td></tr>";
		}
	}
}
else
	{
		echo "No books borrowed.<br>";
	}
echo "</table>";
echo "<a href='userhome.php'>Back to Home</a>";
?>