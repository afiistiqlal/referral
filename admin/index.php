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
<!-- <table>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Status</th>
	</tr>
	<tr>
		<td> <?php echo $id; ?> </td>
		<td> <?php echo $name; ?> </td>
		<td> <?php echo $username; ?> </td>
		<td> <?php echo $pwd; ?> </td>
		<td> <?php echo $status; ?> </td>
	</tr>
</table> -->
<a href="adduser.php">Tambah User</a>
<a href="view.php">View User</a>

<hr>
<footer>
	<button onclick="window.location.href = 'logout.php';">Logout</button>
</footer>
</body>
</html>