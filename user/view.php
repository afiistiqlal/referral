<?php 
session_start();
include '../config.php';

	if (!$connect) {
		die("connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM refer";
	$result = mysqli_query($connect, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<hr><br>Nama: " . $row['nama']. "<br>Phone: " . $row['hp']. "<br>Email: ". $row['email']. "<br>Comment: " . $row['comment'];
		}
	} else {
		echo "hmmm null";
	}

mysqli_close($connect)
 ?>