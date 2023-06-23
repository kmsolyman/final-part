<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title> Login</title>
</head>
<style>
	@import url('https://images.pexels.com/photos/957000/berchtesgaden-alpine-watzmann-berchtesgaden-national-park-957000.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
*{
    font-family: 'poppins' ,sans-serif;
}
body{
    background-image: url("https://images.pexels.com/photos/957000/berchtesgaden-alpine-watzmann-berchtesgaden-national-park-957000.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
.box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 90vh;
}
.container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
    
}
span{
    color: #fff;
    font-size: small;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}
header{
    color: #fff;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}

.input-field .input{
    height: 45px;
    width: 87%;
    border: none;
    border-radius: 30px;
    color: #fff;
    font-size: 15px;
    padding: 0 0 0 45px;
    background: rgba(255,255,255,0.1);
    outline: none;
}
i{
    position: relative;
    top: -33px;
    left: 17px;
    color: #fff;
}
::-webkit-input-placeholder{
    color: #fff;
}
.submit{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    color: black;
    background: rgba(255,255,255,0.7);
    cursor: pointer;
    transition: .3s ;
}
.submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}
.two-col{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    color: #fff;
    font-size: small;
    margin-top: 10px;
}
.one{
    display: flex;
}
label a{
    text-decoration: none;
    color: #fff;
}
</style>
    <style>
.button {
  background-color: #4CAF50; /* button */
  border: none;
  
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {border-radius: 8px;}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

</style>
<body>
<div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">

  	<div class="input-group">
  		<label>Username</label>
  		<input type="username" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Login</button>
  	</div>
      <p>
  		Not yet a member? <a href="updatepassword.php">UPdate</a>
  	</p>
	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <p>
    <a  href="forgetPassword.php" class="button button3">Admin</a>
 </p>
</body>
</html>
<?php
     
     if(isset($_POST['submit']))
     {
     $username =$_POST['username'];
     $password =$_POST['password'];


 $con=mysqli_connect("localhost","root","","project");
 
 $sql="select * from users where username='$username' and password='$password'"; 
 
$query=mysqli_query($con,$sql);
// Return the number of rows in result set
$res= mysqli_num_rows($query);

if ($res==1) {
	echo "Succesfully logged in";
	header('location:index.php');
}
else{
	echo "Invalid";
}
     }
?>