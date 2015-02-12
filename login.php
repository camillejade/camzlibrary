<?php 
session_start();

	if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		if(empty($_POST['username'])	|| empty($_POST['password']))
		{
		header("Location: index.html");
		}
		else if(isset($_POST['login']))
		{
		
		include('connect.php');
		
		$userhere = mysql_real_escape_string($_POST['username']);
		$passhere = mysql_real_escape_string($_POST['password']);
		$userhere = htmlspecialchars($userhere);
		$passhere = htmlspecialchars($passhere);

		$sql = "SELECT * from users where username='$userhere' and password='$passhere'";
		$result = mysql_query($sql);

		if(mysql_num_rows($result) > 0)
		{
			$_SESSION['login_user']=$userhere;
			while ($row = mysql_fetch_assoc($result))
			{
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
		}
		else
		{
			echo "Invalid username/password.";
		}		
		mysql_close($conn);
		}
}
?>