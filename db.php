<?php  
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'db_admin';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal Terhubung ke Database');
?>