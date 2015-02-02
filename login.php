<?php 

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = "camzlibrary";
	$userhere = $_POST['username'];
	$passhere = $_POST['password'];
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
		while ($row = mysqli_fetch_assoc($result))
		{
			if($row['username']=="admin" && $row['usertype']=="admin")
			{
				header("Location: adminhome.php");
				//pag nag-echo.. naiintercept ung pagpunta sa next page
				//echo "Welcome, " . $row['username'] ;
			}
			else if($row['usertype']=="user")
			{
				header("Location :userhome.php");
				//echo "Hello, " . $row['username'];
			}
			else if($row['usertype']=="librarian")
			{
				header("Location :librarianhome.php");
				//echo "Hello, " . $row['username'];
			}

		}
	}
	else
	{
		echo "Invalid username/password.";
	}

	mysqli_close($conn);

}
?>
	