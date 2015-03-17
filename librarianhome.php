<?php
include('session.php');
include('connect.php');
?>

<html>
<body>
	<p>Hi! <?php echo $_SESSION['login_user']; ?></p>
	<p>Profile</p>
	<ul>
		<li><a href='userprofile.php'>View Profile</a></li>
	</ul>
	<p>Books</p>
	<ul>
		<li><a href='libBooks.php'>View All Books</a></li>
	</ul>
	<p>Users</p>
	<ul>
	<li><a href="libUsers.php">View Users</a></li>
	</ul>
	<p><a href="logout.php">Logout</p>
</body>
</html>