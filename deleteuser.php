<?php
include('session.php');
include('connect.php');

$tbl_name="users";

$id = $_GET['id'];
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

if($result){
	echo "Record deleted.";
	echo "<br>";
	echo "<a href='viewusers.php'>View result</a>";
}
else {
	echo "ERROR";
}
 ?>