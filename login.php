<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="source/style.css">
</head>
<body>
<div class="bingkai_form">
	<h1>Login</h1>
	<form action="cek.php" method="POST">
		Username: <br>
		<input type="text" name="username"> <br>
		Password: <br>
		<input type="password" name="password"> <br>
		<br>
		<input type="submit" value="Sign In">
		<input type="button" value="Sign Up" onclick="window.location.href='formsignup.php';"></button>
	</form>
</div>
</body>
</html>