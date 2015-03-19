<?php
include('session.php');
include('connect.php');
$id= $_GET['id'];
$sql = "SELECT * from users WHERE id = '$id'";
$bookid = $_GET['bookid'];
$sql2 = "SELECT * from books where bookid = '$bookid'";
 
 echo "Hello Philippines and Hello World!";

//INSERT SA TABLE NA BORROWLOGS
//UPDATE COUNT SA BOOKS

?>