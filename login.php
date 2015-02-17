<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			header("Location: index.php?message=Fields cannot be empty. Please login with a username and password.");
		}
		else if(isset($_POST['login']))
		{
	
		include('session.php');
		include('connect.php');
		
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$password = md5($password);
	
		$_SESSION['login_user']=$username;

		$sql = "SELECT * from users where username='$username' and password='$password'";
		$result = mysql_query($sql);

		if(mysql_num_rows($result) == 1)
		{
			while ($row = mysql_fetch_assoc($result))
			{
			if($password==$row['password']){
				if($row['username']=="admin" && $row['usertype']=="admin")
				{
					if(isset($_SESSION['login_user'])) {
					header("Location: adminhome.php");
					}
				}
				else if($row['usertype']=="user")
				{
					if(isset($_SESSION['login_user'])) {
					header("Location: userhome.php");
					}
				}
				else if($row['usertype']=="librarian")
				{
					if(isset($_SESSION['login_user'])) {
					header("Location: librarianhome.php");
					}
				}
			}
			
			else
			{
				header("Location: index.php?message=Invalid username or password. Please try again.");
			}
			}
		}
		else
		{
			header("Location: index.php?message=Invalid username or password. Please try again.");
		}	
		
		mysql_close($conn);
		}
}
?>