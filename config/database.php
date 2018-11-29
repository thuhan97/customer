<?php
	/**
	 * @author 		samantha
	 * @email 		hansena020897@gmail.com
	 * @copyright 	Copyright (c) 2018
	 * @since 		Version 1.0
	 * @filesource 	config/database.php
	 */
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'customer';

$dbConnect = mysqli_connect($dbHost, $dbUser, $dbPass,$dbName);
mysqli_query($dbConnect, "SET NAMES 'utf8'");
?>