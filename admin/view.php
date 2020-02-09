
<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
</head>
<body>
<button onclick="window.location.href = 'index.php';">Home</button>
<br>
<table>
<?php
include '../config.php';
if(!$connect){
	die("Connection Failed: " . mysqli_connect_error());
}
$sql = 'SELECT * FROM user';
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0){
	echo "<tr>
			<th>id</th>
			<th>name</th>
			<th>username</th>
			<th>password</th>
			<th>status</th>
		</tr>";
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$username = $row['username'];
		$pwd = $row['password'];
		$status = $row['status'].'<br>';
		echo "<tr>
				<td>$id</td>  
				<td>$name</td>
				<td>$username</td>
				<td>$password</td>
				<td>$status</td>
				<td> <button onclick= \"window.location.href= 'deleteuser.php?id=$name' \"> Delete </button></td>
				<td> <button onclick= \"window.location.href= 'edituser.php?id=$name' \"> Edit </button></td>
				</tr>";
			}
		}
		mysqli_close($connect);
		?>
</table>
		<!-- <td> <a href='deleteuser.php?id=$name'> Delete User </a> </td> -->
<script>
function delete(){
	window.location.href = "deleteuser.php";
}
</script>
</body>
</html>
