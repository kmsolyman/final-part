<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>forgetPassword</h2>
  </div>
	 
  <form method="post" action="recatePassword.php">
  	
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email"  value="<?php echo $result['email']?>" name="email">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><a href='recatPassword.php?id=$result[id]&fn=$result[username]&el=$result[email]&ps=$result[password_1]&pss=$result[password_2]'>NEXT</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>