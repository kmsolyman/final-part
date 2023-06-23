<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
</head>
<body>

<form method="POST" action="update_data.php">
<label>Username</label>
<input type="text" name="username" placeholder="username"><br>	
<label> new password</label>
<input type="text" name="password" placeholder="password"><br>
<input type="submit" name="registration">
</form>
</div>
</body>
</html>
<?php
 if(isset($_POST['registration']))
 {
$username =$_POST['username'];
$password =$_POST['password'];

$db_connect=mysqli_connect("localhost","root","","project");

 $query="update users set password = $password where username='$username'";

 $data = mysqli_query($db_connect, $query);
 header('location:login.php');

 }
?>