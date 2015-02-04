<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>

<html>
<body>
	<p>Hi! <?php echo $_SESSION['login_user']; ?></p>
	<p><a href="logout.php">Logout</p>
	<p>Profile</p>
	<ul>
		<li><a href='userprofile.php'>View Profile</a></li>
	</ul>
	<p>Books</p>
	<ul>
		<li><a href='userbooks.php'>Search Books</a></li>
	</ul>
	<p>Account</p>
	<ul>
		<li><a href='useraccount.php'>Account Details</li>
	</ul>
</body>
</html>