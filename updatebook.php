<?php 
include('session.php');
include('connect.php');
	
$bookid = $_GET['bookid'];
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
				<td><strong>Title</strong></td>
				<td><input name="title" type="text" id="title" value="<?php echo $rows['title']; ?>"></td>
			</tr>
			<tr>
				<td><strong>Author</strong></td>
				<td><input name="author" type="text" id="author" value="<?php echo $rows['author']; ?>" size="15"></td>
			</tr>
			<tr>
				<td><strong>Date Published</strong></td>
				<td><input name="pubdate" type="text" id="pubdate" value="<?php echo $rows['pubdate']; ?>"></td>
			</tr>
			<tr>
				<td><strong>Availability</strong></td>
				<td>
					<select name="availability" id="availability" >
					<option <?php if ($rows['availability'] == "Yes") echo 'selected';?>  value="Yes">Yes</option>
					<option <?php if ($rows['availability'] == "No") echo 'selected';?>  value="No">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>Copies</strong></td>
				<td><input name="copies" type="text" id="copies" value="<?php echo $rows['copies']; ?>" size="15"></td>
			</tr>
			<tr>
				<td><input name="id" type="hidden" id="id" value="<?php echo $rows['bookid']; ?>"></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
		</td>
	</form>
	</tr>
</table>