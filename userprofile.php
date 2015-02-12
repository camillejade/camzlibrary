<?php

include('session.php');
include('connect.php');

echo "<html><body>User Profile";
echo "<form action='userprofile.php' method='post'>";

$userhere = $_SESSION['login_user'];
$sql = "SELECT * FROM users where username = '$userhere'";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
	echo "<table>";
	echo "<tr>";
		echo "<td>";
		echo "First Name:</td>";
		echo "<td>";
		echo "<input type='text' id='fname' value='".$row['fname']."' />";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo "Last Name:</td>";
		echo "<td>";
		echo "<input type='text' id='lname' value='".$row['lname']."' />";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo "Password:</td>";
		echo "<td>";
		echo "<input type='password' id='lname' value='".$row['password']."' />";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo "Address:</td>";
		echo "<td>";
		echo "<input type='text' id='lname' value='".$row['lname']."' />";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo "Contact:</td>";
		echo "<td>";
		echo "<input type='text' id='lname' value='".$row['lname']."' />";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo "Email:</td>";
		echo "<td>";
		echo "<input type='text' id='lname' value='".$row['lname']."' />";
		echo "</td>";
	echo "</tr>";
}
echo "<tr><td><input type='submit' name='edit' value='Edit'></td></tr>";
echo "</table></form>
<a href='userhome.php'>Back to Home</a></body></html>";

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
				
			$result = mysql_query($sql);
			echo "<p>Record Successfully updated. You may now view your updated <a href='userhome.php'>profile</a> </p>";
		}
	}