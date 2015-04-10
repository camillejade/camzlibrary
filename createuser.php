<?php 
include('session.php');

?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
	<tr>
		<form method="post" action="insertuser.php">
		<td>
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
				<td colspan="3"><strong>Add User</strong></td>
			</tr>
			<tr>
				<td><strong>Username</strong></td>
				<td><input name="username" type="text" id="username"></td>
			</tr>
			<tr>
				<td><strong>Name</strong></td>
				<td><input name="name" type="text" id="name"></td>
			</tr>
			<tr>
				<td><strong>Lastname</strong></td>
				<td><input name="lastname" type="text" id="lastname"></td> 	
			</tr>
			<tr>
				<td><strong>Address</strong></td>
				<td><input name="address" type="text" id="address"></td>
			</tr>
			<tr>
				<td><strong>Contact</strong></td>
				<td><input name="contact" type="text" id="contact"></td>
			</tr>
			<tr>
				<td><strong>Email</strong></td>
				<td><input name="email" type="text" id="email"></td>
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