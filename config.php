<?php 
$server = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'refer';

$connect = mysqli_connect($server, $user, $password);
mysqli_select_db($connect, $dbname);

if (!$connect) {
	die("connection failed: " . mysqli_connect_error());
 } 
?>