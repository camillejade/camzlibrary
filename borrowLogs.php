<?php
include('session.php');
include('connect.php');

$sql = "SELECT * FROM borrowlog";
$result = mysql_query($sql);

echo "<table><tr>";

if(mysql_num_rows($result)>0)
{
	echo "<td>Transaction ID : </td>
		<td>User ID :</td>
		<td>Book Id :</td>
		<td>Due date : </td>";
		echo "</tr>";
	while($rows = mysql_fetch_array($result))
	{
		
	echo "<tr><td>".$rows['transID']."</td>";
		echo "<td>".$rows['userid']."</td>";
	
		echo "<td>".$rows['bookid']."</td>";
		echo "<td>Due date : ".$rows['duedate']."</td>";
	}
}
else
{
	echo "<td>No borrowed books yet.</td>";
}

echo "</tr><table>";
?>