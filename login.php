<?php 
session_start();

	if($_SERVER['REQUEST_METHOD']=='POST')
	{	
		if(empty($_POST['username'])	|| empty($_POST['password']))
		{
		header("Location: index.php");
		}
		else if(isset($_POST['login']))
		{
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = "camzlibrary";
		$userhere = mysql_real_escape_string($_POST['username']);
		$passhere = mysql_real_escape_string($_POST['password']);
		$userhere = htmlspecialchars($userhere);
		$passhere = htmlspecialchars($passhere);

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if(!$conn)
		{
			die("Connection failed". mysqli_connect_error());
		}
		//echo "Connected successfully.<br>";

		$sql = "SELECT * from users where username='$userhere' and password='$passhere'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0)
		{
			$_SESSION['login_user']=$userhere;
			while ($row = mysqli_fetch_assoc($result))
			{
				if($row['username']=="admin" && $row['usertype']=="admin")
				{
					if(isset($_SESSION['login_user'])) {
					header("Location: adminhome.php");
					}
					
					//pag nag-echo.. naiintercept ung pagpunta sa next page
					//echo "Welcome, " . $row['username'] ;
				}
				else if($row['usertype']=="user")
				{
					
					if(isset($_SESSION['login_user'])) {
					header("Location: userhome.php");
					}
					//echo "Hello, " . $row['username'];
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
		

		mysqli_close($conn);
		}
		else if(isset($_POST['register']))
		{
		header("Location: register.php");
		}
}
?>