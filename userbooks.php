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
	$sql = "SELECT * FROM books WHERE title LIKE '%$searchname%' OR author LIKE '%$searchname%'";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)>0)
	{
		echo "<table border='1'><th>Title</th><th>Author</th><th>Publish Date</th>";
		while($row = mysql_fetch_assoc($result))
		{
			echo "<tr>
			<td><a href=userbooks2.php?bookid=".$row['bookid'].">".$row['title']."</td>
			<td>".$row['author']."</td>
			<td>".$row['pubdate']."</td>
			</tr>";
		}
	}
	else
	{
		echo "No books found.";
	}
}
else{
	$sql = "SELECT * FROM books";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)>0)
	{
		echo "<table border='1'><th>Title</th><th>Author</th><th>Publish Date</th>";
		while($row = mysql_fetch_assoc($result))
		{
			
			echo "<tr>
			<td><a href=userbooks2.php?bookid=".$row['bookid'].">".$row['title']."</td>
			<td>".$row['author']."</td>
			<td>".$row['pubdate']."</td>
			</tr>";
		}
	}
	else
	{
		echo "No books found.";
	}
}

echo "</table>";
echo "<a href='userhome.php'>Back</a>";
mysql_close($conn);
?>