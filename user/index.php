<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Main Page</title>
</head>
<body>
<?php 
$username = $_SESSION['username'];
echo "hello $username";
?>
<hr>
<form action="add.php" method="GET">
	Nama: <br>
	<input type="text" name="name"> <br>
	Nomor Hp: <br>
	<input type="text" name="hp"> <br>
	Email: <br>
	<input type="text" name="email"> <br>
	Komentar: <br>
	<textarea rows="7" name="comment"></textarea>
	<input type="submit" name="Submit">
</form>
<hr>
<a href="view.php">Liat Data</a>
<br>

<footer>
	<button onclick="window.location.href = 'logout.php';">Logout</button>
</footer>

</body>
</html>