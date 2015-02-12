<?php 

include('session.php');
include('connect.php');

$sql = "SELECT * FROM books";
$result = mysql_query($sql);

echo "<table border='1'><th>Title</th><th>Author</th><th>Publish Date</th>";

if(mysql_num_rows($result)>0)
{
	while($row = mysql_fetch_assoc($result))
	{

		echo "<tr><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['pubdate']."</td></tr>";
	}
}

echo "</table>";
echo "<a href='userhome.php'>Back</a>";
mysql_close($conn);
?>