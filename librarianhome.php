<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>

<html>
<body>
<p><a href="logout.php">Logout</a></p>
</body>
</html>