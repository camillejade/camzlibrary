<?php
include('session.php');
include('connect.php');
$id= $_GET['id'];
$sql1 = "SELECT * from users WHERE id = '$id'";

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
	
if(isset($_POST['submit']) and isset($_POST['search']))
{
	$searchname = $_POST['search'];
	$sql2 = "SELECT * FROM books WHERE title LIKE '%$searchname%' OR author LIKE '%$searchname%'";
	$result = mysql_query($sql2);
	
	if(mysql_num_rows($result)>0)
	{
		echo "<table border='1'><th>Title</th><th>Author</th><th>Publish Date</th><th>Availability</th>";
		while($row = mysql_fetch_assoc($result))
		{

			echo "<tr>
			<td>".$row['title']."</td>
			<td>".$row['author']."</td>
			<td>".$row['pubdate']."</td>
			<td>".$row['availability']."</td>
			";
			$bookid = $row['bookid'];
			if($row['availability']=="yes")
			{
			
			$sql3= "SELECT * FROM borrowlog WHERE userid = '$id' and bookid = '$bookid'";
			$result2 = mysql_query($sql3);
			
			if(mysql_num_rows($result2)>0)
			{
			echo "<td><a href=returnBook.php?bookid=".$row['bookid']."&id=$id>Return</a></td>";
			}
			else{
			echo "<td><a href=borrowBook.php?bookid=".$row['bookid']."&id=$id>Borrow</a></td>";
			}
			}
			else
			{
				$sql3= "SELECT * FROM borrowlog WHERE userid = '$id' and bookid = '$bookid'";
				$result2 = mysql_query($sql3);
				if(mysql_num_rows($result2)>0)
			{
			echo "<td><a href=returnBook.php?bookid=".$row['bookid']."&id=$id>Return</a></td>";
			}
			}
				
			echo "
			<input type='hidden' name='id' value='$id'>
			</tr>";
		}
	}
	else
	{
		echo "No books found.";
	}
}

echo "</table>";
mysql_close($conn);

echo "</tr>";
echo "</table>";
?>