<?php 
session_start(); 

$nama = $_GET['name'];
$hp	= $_GET['hp'];
$email = $_GET['email'];
$comment = $_GET['comment'];

include "../config.php";

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}else{
$add = "INSERT INTO refer(nama, hp, email, comment) VALUES('$nama', '$hp', '$email', '$comment')";

	if (mysqli_query($connect, $add)) {
		// $x = 'keren';
		echo "Terimakasih, Anda telah membantu kami menyelamatkan dunia </br>";
		echo "<a href ='index.php'>Go Back</a></br>";
		// header('location:index.php');
	}else{
		echo "Error: " . $add . "<br>"  . mysqli_error($connect);
	}
}
mysqli_close($connect);

?>