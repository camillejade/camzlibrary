<?php 
include('session.php');
include('connect.php');

$id = $_GET['id'];
$sql = "SELECT * from users WHERE id = '$id'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
	<tr>
	<form name="form1" method="post" action="updateuser2.php">
		<td>
			<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
				<td colspan="3"><strong>Update User</strong> </td>
			</tr>
			<tr>
				<td><strong>Name</strong></td>
				<td><input name="name" type="text" id="name" value="<?php echo $rows['fname']; ?>"></td>
			</tr>
			<tr>
				<td><strong>Lastname</strong></td>
				<td><input name="lastname" type="text" id="lastname" value="<?php echo $rows['lname']; ?>" size="15"></td>
			</tr>
			<tr>
				<td><strong>Address</strong></td>
				<td><input name="address" type="text" id="address" value="<?php echo $rows['address']; ?>"></td>
			</tr>
			<tr>
				<td><strong>Contact</strong></td>
				<td><input name="contact" type="text" id="contact" value="<?php echo $rows['contact']; ?>"></td>
			</tr>
			<tr>
				<td><strong>Email</strong></td>
				<td><input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>" size="15"></td>
			</tr>
			<tr>
				<td><input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
			</table>
		</td>
		</form>
	</tr>
</table>