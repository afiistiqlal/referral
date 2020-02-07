<?php
session_start(); 

$id = $_POST['id'];
$nama = $_POST['name'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$status = $_POST['status'];

include "../config.php";

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$add = "INSERT INTO user(id, name, username, password, status) VALUES('$id', '$nama', '$username', '$pwd', '$status')";

if (mysqli_query($connect, $add)) {
    echo "New record created successfully";
    header('location:index.php');
} else {
    echo "Error: " . $add . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>