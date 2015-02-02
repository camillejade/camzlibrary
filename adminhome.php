<?php 
include('login.php');
session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI']; 

echo "admin home" 
?>