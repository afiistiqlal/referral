<?php 
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
<header>
	<h1>Welcome <?php echo $name; ?></h1>
</header>
<hr>
<a href="adduser.php">Tambah User</a>
<a href="view.php">View User</a>
<hr>
<footer>
	<button onclick="window.location.href = 'logout.php';">Logout</button>
</footer>
</body>
</html>