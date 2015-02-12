<?php
include('session.php');
include('connect.php');
?>
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
				$servername = 'localhost';
				$dbusername = 'root';
				$dbpassword = '';
				$dbname = "camzlibrary";
				$user = $_POST['username'];
				$pass = $_POST['password'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$address = $_POST['address'];
				$contact = $_POST['contact'];
				$email = $_POST['email'];
				
				$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

				if(!$conn)
				{
					die("Connection failed". mysqli_connect_error());
				}
				//echo "Connected successfully.<br>";

				$sql = "INSERT into users(username, password, fname, lname, address, contact, email, usertype) VALUES ('$user', '$pass', '$fname', '$lname', '$address', '$contact', '$email', 'user')";
				
				$result = mysqli_query($conn, $sql);
				echo "<p>Registration Successful. You may now <a href='index.html'>login</a> to continue.</p>";
			}
		}
	}
?>
</form>
</body>
</html>