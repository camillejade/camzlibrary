<?php
include('session.php');
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
		<li><a href='userbooks.php'>View All Books</a></li>
	</ul>
	<p>Account</p>
	<ul>
		<li><a href='useraccount.php'>Account/Fine Details</li>
	</ul>
	<p><a href="logout.php">Logout</p>
</body>
</html>