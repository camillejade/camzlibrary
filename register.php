<html>
<body>
Camz Library System
<form action="register.php" method="post"> 
<p>*Username: <input type="text" name="username"> </p>
<p>*Password: <input type="password" name="password"> </p>
<p>*First Name: <input type="text" name="fname"> </p>
<p>*Last Name: <input type="text" name="lname"> </p>
<p>*Address: <input type="text" name="address"> </p>
<p>*Contact Number: <input type="text" name="contact"> </p>
<p>*Email Address: <input type="text" name="email"> </p>
<p> <input type="submit" name="save" value="Register"> </p>
<p>All fields are required</p>

<?php
include('session.php');
include('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
	{
	if(isset($_POST['save']))
		{
			if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['address']) || empty($_POST['contact']) || empty($_POST['email']))
			{
			echo "<p>Incomplete Information.</p>";
			}
			else
			{
				$user = $_POST['username'];
				$pass = md5($_POST['password']);
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$address = $_POST['address'];
				$contact = $_POST['contact'];
				$email = $_POST['email'];
	
				$sql = "INSERT into users(username, password, fname, lname, address, contact, email, usertype) VALUES ('$user', '$pass', '$fname', '$lname', '$address', '$contact', '$email', 'user')";
				
				$result = mysql_query($sql);
				echo "<p>Registration Successful. You may now <a href='index.php'>login</a> to continue.</p>";
			}
		}
	}
?>
</form>
</body>
</html>