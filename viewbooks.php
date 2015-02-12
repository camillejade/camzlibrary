<?php 
include('session.php');
include('connect.php');

$sql = "SELECT * FROM books";
$result = mysql_query($sql);

echo "<table border='2'><th>Title</th>
<th>Author</th>
<th>Date Published</th>
<th>Availability</th>
<th>Copies</th>";

if(mysql_num_rows($result)>0)
{
	while($row = mysql_fetch_assoc($result))
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
mysql_close($conn);
?>