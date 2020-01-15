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

<table border="1">
	<tr>
		<td>Nama</td>
	</tr>

	<tr>
		<td>Hp</td>
	</tr>

	<tr>
		<td>Email</td>
	</tr>

		<td>Komentar</td>
	
</table>

<hr>

<footer>
	<button onclick="window.location.href = 'logout.php';">Logout</button>
</footer>

</body>
</html>