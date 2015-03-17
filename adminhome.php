<?php 
include('session.php');

?>

<html>
<body>
	<p>Hi, <?php echo $_SESSION['login_user']?></p>
	<p>Users</p>
	<ul>
		<li><a href="createuser.php">Add User</a></li>
		<li><a href="viewusers.php">View Users</a></li>
	</ul>
	<p>Books</p>
	<ul>
		<li><a href="createbook.php">Add Books</a></li>
		<li><a href="viewbooks.php">View Books</a></li>
	</ul>
	<p>Logs</p>
	<ul>
		<li>Borrow/Return Logs</li>
	</ul>
	<p><a href="logout.php">Logout</a></p>
</body>
</html>
.