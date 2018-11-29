<?php
session_start();
if($_SESSION['username'] == 'sam' && $_SESSION['password'] == '123456'){
	$id = $_POST['id'];
	include_once('../config/database.php');

	$sql = "SELECT * FROM khachhang WHERE id = $id";
	$query = mysqli_query($dbConnect, $sql);
	$sql = "DELETE FROM khachhang WHERE id = $id";
	$query = mysqli_query($dbConnect, $sql);
	echo json_encode("success");
	
}
?>