<?php 
include('session.php');
include('connect.php');

echo "
	<form method='post'>
	<table>
		<tr>
		<td><input type='text' id='search' placeholder='Search' name='search'></td>
		</tr>
		<tr>
		<td><input type='submit' name='submit' id='submit' value='Search'></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
	</table>
	</form>";

if(isset($_POST['submit']))
{
	$searchname = $_POST['search'];
	$sql = "SELECT * FROM users WHERE (usertype='user') AND (username LIKE '%$searchname%' OR fname LIKE '%$searchname%' OR lname LIKE '%$searchname%') ";
	$result = mysql_query($sql);

	if(mysql_num_rows($result)>0)
	{
		echo "<table border='2'><th>Username</th>
			 <th>Full Name</th>
			 <th>Address</th>
			 <th>Contact</th>
			 <th>Email</th>";
		while($row = mysql_fetch_assoc($result))
		{
			echo "<tr><td><a href=borrowUsers.php?id=".$row['id'].">".$row['username']."</a></td>
			<td>".$row['fname']." ".$row['lname']."</td>
			<td>".$row['address']."</td>
			<td>".$row['contact']."</td>
			<td>".$row['email']."</td>";
		}
	}
	else{
		echo "No user found.<br>";
	}
}
else{
	$sql = "SELECT * FROM users WHERE usertype='user'";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)>0)
	{
		echo "<table border='2'><th>Username</th>
			 <th>Full Name</th>
			 <th>Address</th>
			 <th>Contact</th>
			 <th>Email</th>";
			 
		while($row = mysql_fetch_assoc($result))
		{
			echo "<tr><td><a href=borrowUsers.php?id=".$row['id'].">".$row['username']."</a></td>
			<td>".$row['fname']." ".$row['lname']."</td>
			<td>".$row['address']."</td>
			<td>".$row['contact']."</td>
			<td>".$row['email']."</td>";
		}
	}
}

echo "</table>";
echo "<a href='librarianhome.php'>Back to Home</a>";
mysql_close($conn);
?>