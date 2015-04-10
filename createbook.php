<?php 
include('session.php');

?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
	<tr>
	<form method="post" action="insertbook.php">
		<td>
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
				<td colspan="3"><strong>Add Book</strong></td>
			</tr>
			<tr>
				<td><strong>Title</strong></td>
				<td><input name="title" type="text" id="title"></td>
			</tr>
			<tr>
				<td><strong>Author</strong></td>
				<td><input name="author" type="text" id="author"></td>
			</tr>
			<tr>
				<td><strong>Date Publisher</strong></td>
				<td><input name="pubdate" type="text" id="pubdate"></td> 	
			</tr>
			<tr>
				<td><strong>Copies</strong></td>
				<td><input name="copies" type="text" id="copies"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
		</td>
	</form>
	</tr>
</table>