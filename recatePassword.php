<?php include('server.php') ?>
<?php
 echo $id = $_GET['id'];

$query  = "SELECT * FROM users where id='$id'";
$data   = mysqli_query($db,$query);
$total  = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>recatePassword</h2>
  </div>
	
  <form method="post" action="index.php">
  
  <div class="input-group">
  	  <label>Email</label>
  	  <input type="email"  value="<?php echo $result['email']?>" name="email" ">
  	</div>
  <div class="input-group">
  	  <label>Password</label>
  	  <input type="password" value="<?php echo $result['password_1']?>" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password"  value="<?php echo $result['password_2']?>" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="update">UPDATE</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
<?php
    if($_POST['update'])
	{
	 $username   =$_POST['username'];
	 $email      =$_POST['email'];
	 $password_1 =$_POST['password_1'];
	 $password_2 =$_POST['password_2'];

	 $query = "UPDATE users set username='$username',email='$email',password_1='$password_1',password_2='$password_2' WHERE id='$id";
	 $data = mysqli_query($db,$query);

	 if($data)
	 {
	  echo "REcord Update";
	 }
	 else{
		  echo "failed";
	 }
	
	}
   
?>