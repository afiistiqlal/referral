<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form action="add.php" method='POST'>
        Id <input type="text" name='id'></br>
        name <input type="text" name='name'></br>
        Username <input type="text" name='username'></br>
        Password <input type="password" name='password'><br>
        status :<br>
        Admin <input type="radio" name='status' value=1></br>
        Users <input type="radio" name='status'  value=0><br>
        <input type="submit" name='Tambah User'>
    </form>
    
</body>
</html>