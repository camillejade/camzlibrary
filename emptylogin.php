<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>

<html>
<body>
<p>Fields cannot be empty.</p>
<p><a href="index.php">Return to Login</a></p>
</body>
</html>