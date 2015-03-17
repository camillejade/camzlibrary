<?php
include('connect.php');
include('login.php');

$id= $_GET['id'];
$sql = "SELECT * from users WHERE id = '$id'";
$result = mysql_query($sql);
echo "<form method='post' action='borrowUsers2.php?id=$id'>";
echo "<table>";
echo "<tr>";

if(mysql_num_rows($result) > 0)
{
	while($row = mysql_fetch_assoc($result))
	{
		echo "<td>First Name : ".$row['fname']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Last Name : ".$row['lname']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Address : ".$row['address']."</td>";
		echo "</tr>";
		echo "</tr>";
		echo "<td>Contact : ".$row['contact']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><input type='submit' name='submit' id='submit' value='Borrow'></td>";
		echo "<input type='hidden' name='id' value=".$row['id'].">";
		echo "</tr>";
	}
}	
echo "</tr>";
echo "</table>";
echo "</form>";

//borrow books

//textboxdasdasd
//search books
//borrow
//minus count of books
	
?>