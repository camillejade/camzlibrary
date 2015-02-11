<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'camzlibrary';
$userhere = $_SESSION['login_user'];

echo "<html><body>User Profile";
echo "<form action='userprofile.php' method='post'>";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
	die("Connection failed". mysql_connect_error);
}

$sql = "SELECT * FROM users where username = '$userhere'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
  echo "<p>First Name:";
  echo "<input type='text' id='fname' value='".$row['fname']."' /></p>";
  echo "<p>Last Name:";
  echo "<input type='text' id='lname' value='".$row['lname']."' /></p>";
  echo "<p>Password:";
  echo "<input type='password' id='lname' value='".$row['password']."' /></p>";
  echo "<p>Address:";
  echo "<input type='text' id='lname' value='".$row['lname']."' /></p>";
  echo "<p>Contact:";
  echo "<input type='text' id='lname' value='".$row['lname']."' /></p>";
  echo "<p>Email:";
  echo "<input type='text' id='lname' value='".$row['lname']."' /></p>";
}
echo "<p> <input type='submit' name='edit' value='Edit'> </p>";
echo "</form></body></html>";

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	if(isset($_POST['edit']))
		{
			$user = $_SESSION['login_user'];
			$pass = $_POST['password'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
					
			$sql = "UPDATE users SET password='$pass', fname='$fname', lname='$lname', address='$address', contact='$contact', email='$email', WHERE user='$user')";
				
			$result = mysqli_query($conn, $sql);
			echo "<p>Record Successfully updated. You may now view your updated <a href='userhome.php'>profile</a> </p>";
		}
	}