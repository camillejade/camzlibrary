<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:index.html");
}
?>
<html>
<body>
Camz Library System
<form action="regstat.php" method="post"> 
<p>Username: <input type="text" name="username"> </p>
<p>Password: <input type="password" name="password"> </p>
<p>Password: <input type="password" name="password"> </p>
<p>First Name: <input type="fname" name="password"> </p>
<p>Middle Name: <input type="mname" name="password"> </p>
<p>Last Name: <input type="lname" name="password"> </p>
<p>Address: <input type="address" name="password"> </p>
<p>Contact Number: <input type="contact" name="password"> </p>
<p>Email Address: <input type="email" name="password"> </p>
<p> <input type="submit" name="save" value="Register"> </p>
</form>
</body>
</html>