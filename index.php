<?php
echo "Camz Library System
<form action='login.php' method='post'> 
<table>
	<tr>
		<td>Username:</td>
		<td><input type='text' name='username'></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='password' name='password'></td>
	</tr>
	<tr>
		<td><input type='submit' id='login' name='login' value='Login'></td>
	</tr>
	<tr>
		<td><a href='register.php'>New User? Sign Up</a></td>
	</tr>
</table>
<table>
	<tr>
		<td>";
			if(isset($_GET['message'])){
				echo $_GET['message'];
			}
		echo "
		</td>
	</tr>
</table>
</form>";

?>