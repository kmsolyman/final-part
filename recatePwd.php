<?php
  $servername = "localhost";
  $username ="root";
  $password ="";
  $dbname ="project";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
      if($conn)
       {
        echo "ok";
       }
       else
       {
        echo "connect faild";
       }
?>

<?php
 $id  = $_GET['id'];
$query  = "SELECT * FROM users where id='$id'";
$data   = mysqli_query($conn,$query);
$total  = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>



<html>
<head>
<title>Update</title>
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
   <div class="header" class="input-group">
<form class="input-group" method="post" action="login.php">
</div>
<div  class="input-group">
<a href="login.php">UPDATE</a>
</div class="input-group">
 ID: <br>
<input  class="input-group"type="hidden" name="id" class="txtField" value="<?php echo $result['id']; ?>">
<input  class="input-group" type="text" name="id"  value="<?php echo $result['id']; ?>">
<br>
Email: <br>
<input class="input-group" type="text" name="email" class="txtField" value="<?php echo $result['email']; ?>">
<br>
Username :<br>
<input  class="input-group" type="text" name="username" class="txtField" value="<?php echo $result['username']; ?>">
<br>
 Password:<br>
<input class="input-group" type="text" name="password" class="txtField" value="<?php echo $result['password']; ?>">
<br>
<input class="input-group" type="submit" name="update" value="update" class="buttom">

</form>
</div>

</body>
</html>
<?php
if(isset($_POST['update']))
{  
  $servername = "localhost";
  $username ="root";
  $password ="";
  $dbname ="project";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
      if($conn)
       {
        echo "ok";
       }
       else
       {
        echo "connect faild";
       }
    
    $id        = $_POST['id'];
    $email     = $_POST['email'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
 
$query  ="UPDATE users set id='$id',username='$username',email='$email',password='$password' WHERE id='$id'";
$result = mysqli_query($conn,$query);

if($result)
{
    echo'Data Updated';
}
else
{
    mysqli_close($connect);
}
}
?>
