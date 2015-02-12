<?php 
include('session.php');
include('connect.php');

$sql = "SELECT * FROM users";
$result = mysql_query($sql);

echo "<table border='2'><th>Username</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Contact</th>
<th>Email</th>";

if(mysql_num_rows($result)>0)
{
	while($row = mysql_fetch_assoc($result))
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
mysql_close($conn);
?>