<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   <!-- token login dropdown -->

  
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>
<body>
     <!-- Navbar -->

<section>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <button onclick="document.getElementById('login').style.display='block'">
     <a href="#login"  class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-shopping-cart w3-margin-right"></i>Prement</a>
    </button>
    <a href="./index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a  href="./about.php"  class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="./package.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PACKAGES</a>
    <a href="./contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
     
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#login" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
  <a href="packags.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PACKEGS</a>
  <a href="./contact.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>
</section>
<?php
  $servername = "localhost";
  $username ="root";
  $password ="";
  $dbname ="bilregister";

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


<section>
        <div>
          <h1 style="text-align:center"><b>BOOK NOW</b></h1>
              <h2 style="text-align:center">Responsive Checkout Form</h2>
                 <p style="text-align:center">Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p>
          
        <div class="row" style="display:inline-block">
           <div class="col-75" style="display:inline-block">
              <div class="container" style="display:inline-block">
              
<form  method="POST" action="#" style="display:inline-block">
                       
                 <div class="row" style="display:inline-block">
                      <div class="col-50" style="display:inline-block">
                            <h3>Billing Address</h3>
                     <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                          <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                     <label for="email"><i class="fa fa-envelope"></i> Email</label>
                          <input type="text" id="email" name="email" placeholder="john@example.com">
                     <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                     <label for="city"><i class="fa fa-institution"></i> City</label>
                          <input type="text" id="city" name="city" placeholder="New York">
                 <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                         <input type="text" id="state" name="state" placeholder="NY">
                    </div>
                        <div class="col-50">
                           <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                    </div>
                   </div>
                      <div class="col-50" style="display:inline-block">
                              <h3>Payment</h3>
                              <label for="fname">Accepted Cards</label>
                      <div class="icon-container">
                               <i class="fa fa-cc-visa" style="color:navy;"></i>
                               <i class="fa fa-cc-amex" style="color:blue;"></i>
                               <i class="fa fa-cc-mastercard" style="color:red;"></i>
                               <i class="fa fa-cc-discover" style="color:orange;"></i>
                     </div>
                          <label for="cname">Name on Card</label>
                           <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                               <label for="ccnum">Credit card number</label>
                           <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                               <label for="expmonth">Exp Month</label>
                           <input type="text" id="expmonth" name="expmonth" placeholder="September">
                      <div class="row">
                        <div class="col-50">
                             <label for="expyear">Exp Year</label>
                                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                         </div>
                              <div class="col-50">
                                     <label for="cvv">CVV</label>
                                         <input type="text" id="cvv" name="cvv" placeholder="352">
                               </div>
                          </div>
                    </div>
               </div>
                   <label>
                     <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                   </label>
                       <input type="submit" value="submit" class="btn"  name="submit">
         </form>
    </div>
  </div>
</sectionm>
<?php
     if(isset($_POST['submit']))
    {
      $_firstname  = $_POST['firstname'];
      $_email      = $_POST['email'];
      $_address    = $_POST['address'];
      $_city       = $_POST['city'];
      $_state      = $_POST['state'];
      $_zip        = $_POST['zip'];
      $_cardname   = $_POST['cardname'];
      $_cardnumber = $_POST['cardnumber'];
      $_expmonth   = $_POST['expmonth'];
      $_expyear    = $_POST['expyear'];
      $_cvv        = $_POST['cvv'];
  
     $query = "INSERT INTO  bilform VALUES('$_firstname','$_email',' $_address',' $_city','$_state','$_zip','$_cardname',
      '$_cardnumber',' $_expmonth','$_expyear','$_cvv')";

           $data = mysqli_query($conn,$query);
    }
?>
<!-- The Tour packeg Section token button -->

<section>
     <div class="w3-black" id="PACKAGES">
     <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center"></h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/4321565/pexels-photo-4321565.jpeg?auto=compress&cs=tinysrgb&w=300" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/2770933/pexels-photo-2770933.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/590133/pexels-photo-590133.jpeg?auto=compress&cs=tinysrgb&w=300" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('login');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<script>
    /* Demo purposes only */
$(".hover").mouseleave(function () {
  $(this).removeClass("hover");
});


</script>


<script>

function videoslider(links){
    document.querySelector(".slider").src = links;
}

</script>

</body>
</html>
