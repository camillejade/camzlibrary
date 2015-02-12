<?php 
include('session.php');
include('connect.php');

$bookid = $_GET['id'];
$sql = "SELECT * from books WHERE bookid = '$bookid'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
	<tr>
	<form name="form1" method="post" action="updatebook2.php">
		<td>
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
		<tr>
			<td>&nbsp;</td>
			<td colspan="3"><strong>Update Books</strong> </td>
		</tr>
		<tr>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
			<td align="center">&nbsp;</td>
		</tr>
		 <tr>
			 <td align="center">&nbsp;</td>
			 <td align="center"><strong>Title</strong></td>
			 <td align="center"><strong>Author</strong></td>
			 <td align="center"><strong>Date Published</strong></td>
			 <td align="center"><strong>Availability</strong></td>
			 <td align="center"><strong>Copies</strong></td>
		 </tr>
		 <tr>
			<td>&nbsp;</td>
			<td align="center">
			<input name="title" type="text" id="title" value="<?php echo $rows['title']; ?>">
			</td>
			<td align="center">
			<input name="author" type="text" id="author" value="<?php echo $rows['author']; ?>" size="15">
			</td>
			<td align="center">
			<input name="pubdate" type="text" id="pubdate" value="<?php echo $rows['pubdate']; ?>">
			</td>
			<td align="center">
			<input name="availability" type="text" id="availability" value="<?php echo $rows['availability']; ?>">
			</td>
			<td>
			<input name="copies" type="text" id="copies" value="<?php echo $rows['copies']; ?>" size="15">
			</td>
		 </tr>
		 <tr>
			<td>&nbsp;</td>
			<td>
			<input name="id" type="hidden" id="id" value="<?php echo $rows['bookid']; ?>">
			</td>
			<td align="center">
			<input type="submit" name="Submit" value="Submit">
			</td>
			<td>&nbsp;</td>
		 </tr>
		</table>
	</td>
	</form>
	</tr>
</table>