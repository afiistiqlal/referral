<?php 
$server = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'refer';

$connect = mysqli_connect($server, $user, $password);
mysqli_select_db($connect, $dbname);

if ($connect -> connect_error) {
 	die("connection failed: " . $conn->connect_error);
 } 
?>