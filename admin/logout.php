<?php
session_start();
if($_SESSION['username'] == 'sam' && $_SESSION['password'] == '123456'){
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_destroy(); 
}
header('location:login.php');
?>