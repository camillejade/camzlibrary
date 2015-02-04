<?php 
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>

<html>
<body>
	<p>Hi, <?php echo $_SESSION['login_user']?></p>
	<p><a href="logout.php">Logout</p>
	<p>Users</p>
	<ul>
		<li>Create User</li>
		<li><a href="viewusers.php">View Users</a></li>
	</ul>
	<p>Books</p>
	<ul>
		<li>Add Books</li>
		<li><a href="viewbooks.php">View Books</a></li>
	</ul>
	<p>Logs</p>
	<ul>
		<li>Borrow/Return Logs</li>
	</ul>
</body>
</html>
