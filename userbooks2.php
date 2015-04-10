<?php
include('session.php');
include('connect.php');

$tbl_name="books";
$id = intval($_GET['bookid']);

$sql="SELECT * FROM $tbl_name WHERE bookid='$id'";
$result=mysql_query($sql);
if($result>0)
{
	while($rows=mysql_fetch_assoc($result))
	{
		echo"
		<form>
		<table>
		<tr>
			<td><b>Title</b></td>
			<td>".$rows['title']."</td>
		</tr>
		<tr>
			<td><b>Author<b></td>
			<td>".$rows['author']."</td>
		</tr>
		<tr>
			<td><b>Description</b></td>
			<td>".$rows['bookDesc']."</td>
		</tr>
		</table>
		</form>
		";
		
	}
}
else
{
	echo "No such book found.";
}

echo "<p><table>
		<tr>
			<td><a href='userbooks.php'>Back to Books</a></td>
		</tr>
	</table></p>";
?> 