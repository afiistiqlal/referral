<?php
include '../config.php';
$name = $_GET['name'];
if (!$connnect) {
    die("Connection Failed: ". mysqli_connect_error());
}
$sql = 'Delete from user where name="$name"';

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>