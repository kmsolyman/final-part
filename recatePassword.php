<?php
  $servername = "localhost";
  $username ="root";
  $password ="";
  $dbname ="project";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
      if($conn)
       {
        echo "";
       }
       else
       {
        echo "connect faild";
       }
?>



<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
<body>
<div class="header">
  	<h2>RecatePassword</h2>
  </div>
 <form method="POST" action="#">
  	
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email"  value="email" name="email">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">NEXT</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>

	  <?php
   if(isset($_POST['login_user']))
   {
	$email =$_POST['email'];
	 
	 $query  = "SELECT * FROM users WHERE email ='$email'";
     $data   = mysqli_query($conn, $query);
	 
	 $total  = mysqli_num_rows($data);
     
	 if($total != 0)
	 {
		?>
           <table border="3">
			<tr>
			    <th width="10%">id</th>
			    <th width="30%">Email</th>
				<th width="30%">USERNAME</th>
				<th width="25%">CONFARM PASSWORD</th>
				<th width="25%" style="color:red">Update</th>
	        </tr>
	      

<?php
		while($result = mysqli_fetch_assoc($data))
		{
			echo 
			"<tr>
			       <td>".$result['id']."</td>
				   <td>".$result['email']."</td>
			       <td>".$result['username']."</td>
			       <td>".$result['password']."</td>
				   <td><a href='recatePwd.php?id=$result[id]&el=$result[email]&use=$result[username]&pass=$result[password]'>Update</a></td>

		     </tr>
			 ";
		}
}
else
{
	echo "not print";
}
   }

?>
 </table>

 