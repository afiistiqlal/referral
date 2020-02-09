<?php
include '../config.php';
$id = $_GET['id'];
if (!$connect) {
    die("Connection Failed: ". mysqli_connect_error());
}
$sql = "Delete from user where name='$id'";

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>