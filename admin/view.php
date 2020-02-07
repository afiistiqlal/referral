<?php
include '../config.php';
if(!$connect){
	die("Connection Failed: " . mysqli_connect_error());
}
$sql = 'SELECT * FROM user';
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row['id'] .' '. $row['name'] .' '. $row['username'] .' '. $pwd = $row['password'] .' '. $status = $row['status'] .' '. '<br>';
	}
}
mysqli_close($connect);
?>