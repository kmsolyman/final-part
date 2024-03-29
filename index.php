<!DOCTYPE html>
<html lang="en">
<head>
   <title>about</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Embedding Fonts from google fonts -->
  <style>
    .display {
  margin: 0;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f7f7f7;
}
.section-heading {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f7f7f7;
  min-height: 100vh;
  font-family: "Dancing Script", cursive;
  text-align: center;
  font-size: 64px;
  color: #10996d;
  margin: 0 0 70px;
}
.container {
  display: flex;
  justify-content: center;
  width: 90%;
  max-width: 1440px;
  margin: 0 auto;
}

.profile {
  position: relative;
  transition: all 0.3s;
}

.profile:hover {
  transform: translateY(25px);
}

.profile img {
  max-width: 100%;
  border-radius: 50%;
  border: 5px solid #f7f7f7;
  filter: drop-shadow(-20px 0 10px rgba(0, 0, 0, 0.1));
  cursor: pointer;
}

.profile:not(:first-child) img {
  margin-left: -20px;
}

.profile .name {
  position: absolute;
  background-color: #10996d;
  color: #fff;
  font-family: "Bebas Neue", cursive;
  padding: 15px 30px;
  border-radius: 100px;
  bottom: -80px;
  left: 50%;
  white-space: nowrap;
  transform: translate(-50%, -50px);
  letter-spacing: 1px;
  font-size: 20px;
  opacity: 0;
  transition: all 0.3s;
}

.profile .name::before {
  content: "";
  position: absolute;
  width: 15px;
  height: 15px;
  background-color: #10996d;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%) rotate(45deg);
}

.profile img:hover + .name {
  opacity: 1;
  transform: translateX(-50%);
  box-shadow: 0 10px 20px rgba(86, 86, 198, 0.3);
}

  </style>
     
<style>
   *{box-sizing: border-box;}
   .menu{
       background-color: rgb(230, 236, 237);
       display: flex;
       justify-content: flex-end;
       
     
       position: fixed;
       top: 0;
       width: 100%;
   }
   
   .menu a{
       text-decoration: none;
       padding: 20px;
       color: rgb(0, 0, 0);
   }
   
   .menu a:hover{
       background-color: rgb(247, 242, 242);
   }
   
   @media screen and (max-width: 600px){
       .menu{
           flex-direction: column;
           padding: 10px;
           
       }
       .menu a {
           background-color: rgb(254, 254, 255);
           margin: 10px 0;
           text-align: center;
           border-radius: 10px;
       }
   }
   
   
   .slideshow-container {
       display: flex;
      flex-flow: row wrap;
      justify-content: center;
      align-items: center;
      height: 150vh;
      background-color: rgb(255, 255, 255);
    }
    .slideshow-element {
      text-align: center;
      position: absolute;
      transform: translate(-50%, -50%) scale(0);
      transition: transform 0.6s;
    }
    .slideshow-element i,
    h2 {
      font-size: 8rem;
      color: coral;
    }
    .slideshow-element.current {
      transform: translate(-50%, -50%) scale(1);
      transition: transform 0.6s;
    }
   
   </style>
   
   <style media="screen">
     .form-question {
       display: flex;
       flex-direction: column;
       justify-content: center;
       margin: 0 0 3rem;
       min-height: 3rem;
     }
     .form-question__title {
       color: #342357;
       font-size: 1.5rem;
       padding: 1rem;
     }
     .input-container {
       border-bottom: solid 2px #333333;
     }
     .input-container input {
       border: none;
       box-sizing: border-box;
       outline: 0;
       padding: .75rem;
       width: 100%;
     }
     </style>
     
     
   <style>
   .slidecontainer {
     width: 100%;
   }
   
   .slider {
     -webkit-appearance: none;
     width: 100%;
     height: 15px;
     border-radius: 5px;
     background: #d3d3d3;
     outline: none;
     opacity: 0.7;
     -webkit-transition: .2s;
     transition: opacity .2s;
   }
   
   .slider:hover {
     opacity: 1;
   }
   
   .slider::-webkit-slider-thumb {
     -webkit-appearance: none;
     appearance: none;
     width: 25px;
     height: 25px;
     border-radius: 50%;
     background: #04AA6D;
     cursor: pointer;
   }
   
   .slider::-moz-range-thumb {
     width: 25px;
     height: 25px;
     border-radius: 50%;
     background: #04AA6D;
     cursor: pointer;
   }
   </style>
   
   <!-- token login dropdown -->
   <style>
   body {
     min-height: 100%;
     margin: 0;
   }
   
   body {
     padding: 30px;
     background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
     box-sizing: border-box;
   }
   
   .select-box {
     position: relative;
     display: block;
     width: 100%;
     margin: 0 auto;
     font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Calibri", "Arial", sans-serif;
     font-size: 18px;
     color: #60666d;
   }
   @media (min-width: 768px) {
     .select-box {
       width: 70%;
     }
   }
   @media (min-width: 992px) {
     .select-box {
       width: 50%;
     }
   }
   @media (min-width: 1200px) {
     .select-box {
       width: 100%;
     }
   }
   .select-box__current {
     position: relative;
     box-shadow:s 0 20px 50px -20px rgba(0, 0, 0, 0.3);
     cursosr: pointer;
     outline: none;
   }
   .select-box__current:focus + .select-box__list {
     opacity: 1;
     -webkit-animation-name: none;
             animation-name: none;
   }
   .select-box__current:focus + .select-box__list .select-box__option {
     cursor: pointer;
   }
   .select-box__current:focus .select-box__icon {
     transform: translateY(-50%) rotate(180deg);
   }
   .select-box__icon {
     position: absolute;
     top: 50%;
     right: 15px;
     transform: translateY(-50%);
     width: 20px;
     opacity: 0.3;
     transition: 0.2s ease;
   }
   .select-box__value {
     display: flex;
   }
   .select-box__input {
     display: none;
   }
   .select-box__input:checked + .select-box__input-text {
     display: block;
   }
   .select-box__input-text {
     display: none;
     width: 100%;
     margin: 0;
     padding: 15px;
     background-color: #f4f4f4;
   }
   .select-box__list {
     position: absolute;
     width: 100%;
     padding: 0;
     list-style: none;
     opacity: 0;
     -webkit-animation-name: HideList;
             animation-name: HideList;
     -webkit-animation-duration: 0.5s;
             animation-duration: 0.5s;
     -webkit-animation-delay: 0.5s;
             animation-delay: 0.5s;
     -webkit-animation-fill-mode: forwards;
             animation-fill-mode: forwards;
     -webkit-animation-timing-function: step-start;
             animation-timing-function: step-start;
     box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
   }
   .select-box__option {
     display: block;
     padding: 15px;
     background-color:#f4f4f4;
   }
   .select-box__option:hover, .select-box__option:focus {
     color: #546c84;
     background-color: #fbfbfb;
   }
   
   @-webkit-keyframes HideList {
     from {
       transform: scaleY(1);
     }
     to {
       transform: scaleY(0);
     }
   }
   
   @keyframes HideList {
     from {
       transform: scaleY(1);
     }
     to {
       transform: scaleY(0);
     }
   }
   </style>
   
   
   <!-- img hobard itali soidi  -->
   <style>
   .cards-list {
     z-index: 0;
     width: 100%;
     display: flex;
     justify-content: space-around;
     flex-wrap: wrap;
   }
   
   .card {
     margin: 20px auto;
     width: 300px;
     height: 300px;
     border-radius: 40px;
     box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25),
       -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
     cursor: pointer;
     transition: 0.4s;
   }
   
   .card .card_image {
     width: inherit;
     height: inherit;
     border-radius: 40px;
   }
   
   .card .card_image img {
     width: inherit;
     height: inherit;
     border-radius: 40px;
     object-fit: cover;
   }
   
   .card .card_title {
     text-align: center;
     border-radius: 0px 0px 40px 40px;
     font-family: sans-serif;
     font-weight: bold;
     font-size: 30px;
     margin-top: -80px;
     height: 40px;
   }
   
   .card:hover {
     transform: scale(0.9, 0.9);
     box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
       -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
   }
   
   .title-white {
     color: white;
   }
   
   .title-black {
     color: black;
   }
   
   @media all and (max-width: 500px) {
     .card-list {
       /* On small screens, we are no longer using row direction but column */
       flex-direction: column;
     }
   }
   
   
   .card {
     margin: 30px auto;
     width: 300px;
     height: 300px;
     border-radius: 40px;
     background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
     background-size: cover;
     background-repeat: no-repeat;
     background-position: center;
     background-repeat: no-repeat;
     box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
     transition: 0.4s;
   }
   </style>
   
   <!-- Recently Viewed Adventures --sale ted -->
   <style>
     @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
     @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
    .snip1418 {
     display: inline-block;
     font-family: "Raleway", Arial, sans-serif;
     position: relative;
     overflow: hidden;
     margin:;
     min-width: 200px;
     max-width: 300px;
     width: 100%;
     background: #ffffff;
     text-align: left;
     color: #000000;
     box-shadow: 0 0 22px rgba(0, 0, 0, 0.35);
     font-size: 16px;
     -webkit-transform: translateZ(0);
     transform: translateZ(0);
     -webkit-perspective: 20em;
     perspective: 20em;
   }
   .snip1418 * {
     
     -webkit-box-sizing: border-box;
     box-sizing: border-box;
     -webkit-transition: all 0.3s ease-out;
     transition: all 0.3s ease-out;
   }
   .snip1418 img {
    
     max-width: 100%;
     vertical-align: top;
     position: relative;
   }
   .snip1418 .add-to-cart {
   
     position: absolute;
     top: 0;
     right: 0;
     padding-right: 10px;
     color: #ffffff;
     font-weight: 700;
     text-transform: uppercase;
     font-size: 0.9em;
     opacity: 0;
     background-color: #a10d17;
     -webkit-transform: rotateX(-90deg);
     transform: rotateX(-90deg);
     -webkit-transform-origin: 100% 0;
     -ms-transform-origin: 100% 0;
     transform-origin: 100% 0;
   }
   .snip1418 .add-to-cart i {
    
     margin-right: 10px;
     width: 40px;
     line-height: 40px;
     text-align: center;
     background-color: #164666;
     color: #ffffff;
     font-size: 1.4em;
     
   }
   .snip1418 figcaption {
     padding: 20px;
     
   }
   .snip1418 h3,
   .snip1418 p {
     margin: 0;
   }
   .snip1418 h3 {
     font-size: 1.5em;
     font-weight: 700;
     margin-bottom: 10px;
     text-transform: uppercase;
    
   }
   .snip1418 p {
     font-size: 0.9em;
     letter-spacing: 1px;
     font-weight: 400;
   
   }
   .snip1418 .price {
     font-weight: 500;
     font-size: 1.5em;
     line-height: 48px;
     letter-spacing: 1px;
     
   }
   .snip1418 .price s {
     margin-right: 105px;
     opacity: 0.5;
     font-size: 0.9em;
     
   }
   .snip1418 a {
     position: absolute;
     top: 0;
     bottom: 0px;
     left: 0;
     right: 0;
   
   }
   .snip1418:hover .add-to-cart,
   .snip1418.hover .add-to-cart {
     opacity: 3;
     -webkit-transform: rotateX(0deg);
     transform: rotateX(0deg);
    
   }
   .snip1418:hover .add-to-cart i,
   .snip1418.hover .add-to-cart i {
     background-color: #2980b9;
   
   }
   </style>
   
   <!-- Next Tour -->
   
   <!---Servies icon nig---->
   <style>
   .mysDiv {
    background-color: lightblue;
    border-radius: 25px;    
   
    
   }
   .cards {
     display: inline-block;
     box-shadow: 0 13px 15px 0 rgba(0,0,0,0.4);
     transition: 0.3s;
     padding:35px 40px ;
     margin: 35px 40px ;
     width: 25%;
   
   
   }
   .cardss {
     display: inline-block;
     box-shadow: 0 13px 15px 0 rgba(0,0,0,0.4);
     transition: 0.3s;
     padding:35px 40px ;
     margin: 35px 40px ;
     width:25%;
   
   }
   .cardsss {
     display: inline-block;
     box-shadow: 0 13px 15px 0 rgba(0,0,0,0.4);
     transition: 0.3s;
     padding: 35px 40px ;
     margin: 35px 40px ;
     width:25%;
   
   }
   .mytext{
   
     color:#000000;
     text-align:center;
     
   }
   
   .cards:hover {
   
     box-shadow: 0 48px 76px 0 rgba(0,0,0,0.2);
   }
   .cardss:hover {
    
     box-shadow: 0 48px 76px 0 rgba(0,0,0,0.2);
   }
   .cardsss:hover {
    
     box-shadow: 0 48px 76px 0 rgba(0,0,0,0.2);
   }
   </style>
   
   <style>
     .cards-nich {
     display: inline-block;
     padding:35px 40px ;
     margin: 35px 40px ;
     width: 45%;
   }
   .cardsss-nich {
     display: inline-block;
     padding:35px 40px ;
     margin: 35px 40px ;
     width:40%;
   }
   </style>
   
   <style>
   .myDiv {
     border: 5px outset red;
     background-color: lightblue;    
     text-align: center;
   }
   </style>
    <!-- galary button -->
   <style>
     <!--  -->
    .checked {
     color: orange;
   }
   </style>
   
        
   <!-- The Booking Section -->
   <style>
   
   .row {
     font-family: Arial;
     font-size: 17px;
     padding: 8px;
   
     display: -ms-flexbox; /* IE10 */
     display: flex;
     -ms-flex-wrap: wrap; /* IE10 */
     flex-wrap: wrap;
     margin: 2px 5px;
   }
   
   .col-25 {
     -ms-flex: 5%; /* IE10 */
     flex: 5%;
   }
   
   .col-50 {
     -ms-flex: 5%; /* IE10 */
     flex: 5%;
   }
   
   .col-75 {
     -ms-flex: 5%; /* IE10 */
     flex: 5%;
   }
   
   .col-25,
   .col-50,
   .col-75 {

   }
   
   
   input[type=text] {
     width: 100%;
     margin-bottom: 2px;
     padding: 2px;
     border: 1px solid #ccc;
     border-radius: 20px;
   }
   
   label {
     margin-bottom: 5px;
     display: block;
   }
   
   .icon-container {
     margin-bottom: 2px;
     padding: 7px 9px;
     font-size: 24px;
   }
   
   .btn {
     background-color: #04AA6D;
     color: white;
     padding: 12px;
     margin: 1px -10px;
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
   @media (max-width: 8px) {
     .row {
       flex-direction: column-reverse;
     }
     .col-25 {
       margin-bottom: 20px;
     }
   }
   </style>
   
   <!-- image galary w -->
   <style>
   .containers {
     display:inline-block;
     position: relative;
     width:19%;
   
   }
   
   .image {
     display:inline-block;
     width: 100%;
     height: auto;
   }
   
   .overlay {
     display:inline-block;
     position: absolute;
     bottom: 100%;
     left: 200px;
     right: 300px;
     background-color: #008CBA;
     overflow: hidden;
     width: 100%;
     height:500px;
     transition: .5s ease;
   }
   
   .containers:hover .overlay {
     display:inline-block;
     bottom: 0;
     height: 100%;
   }
   
   .text {
     display:inline-block;
     color: black;
     font-size: 24px;
     position: absolute;
     top: 20%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
   }
   .texts {
     display:inline-block;
     color: black;
     font-size: 24px;
     position: absolute;
     top: 50%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
   }
   .textss {
     display:inline-block;
     background-color:#e6e600;
     color: black;
     font-size: 24px;
     position: absolute;
     top: 80%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
     border: 2px solid black;
     background-color: white;
     color: black;
     padding: 14px 28px;
     font-size: 16px;
     cursor: pointer;
     border-color: #ff9800;
     color: orange;
   }
   .textss:hover {
     display:inline-block;
     background: #ff9800;
     color: white;
   }
   
   </style> 
   
   
   <!-- review -->   
   <style>
   
   .container {
     position: relative;
     width: 18%;
   }
   
   .image {
     display: block;
     width: 100%;
     height: auto;
   }
   
   .overlay {
     position: absolute;
     bottom: 100%;
     left: 0;
     right: 0;
     background-color: #008CBA;
     overflow: hidden;
     width: 100%;
     height:0;
     transition: .5s ease;
   }
   
   .container:hover .overlay {
     bottom: 0;
     height: 100%;
   }
   
   .text {
     color: black;
     font-size: 24px;
     position: absolute;
     top: 20%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
   }
   .texts {
     color: black;
     font-size: 24px;
     position: absolute;
     top: 50%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
   }
   .textss {
     background-color:#e6e600;
     color: black;
     font-size: 24px;
     position: absolute;
     top: 80%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     text-align: center;
     border: 2px solid black;
     background-color: white;
     color: black;
     padding: 14px 28px;
     font-size: 16px;
     cursor: pointer;
     border-color: #ff9800;
     color: orange;
   }
   .textss:hover {
     background: #ff9800;
     color: white;
   }
   
   </style>
   
   <!-- video -->
   <style>
   *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
   }
   .container{
       width: 100%;
       height: 100vh;
       position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
   }
   
   .container .slider{
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
   }
   
   
   .container ul{
       position: absolute;
       bottom: 30px;
       left: 50%;
       transform: translateX(-50%);
       display: flex;
       justify-content: center;
       align-items: center;
       z-index: 20;
   }
   
   .container ul li{
       list-style: none;
       cursor: pointer;
       margin: 10px;
   }
   
   
   .container ul li video{
       width: 200px;
       transition: all 0.3s;
   }
   .container ul li video:hover{
       transform: scale(1.1);
   }
   
   video{
       width: 100%;
       height: 100%;
   }
   </style>
</style>

</head>
<body>

<!-- Navbar -->

<section>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <button onclick="document.getElementById('login').style.display='block'">
     <a href="#login"  class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-shopping-cart w3-margin-right"></i>Prement</a>
    </button>
    <a href="#HOME" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a  href="./about.php"  class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="./package.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PACKAGES</a>
    <a href="./contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    
    <a href="login.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="w3-xxlarge fa fa-user"></i></a>
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#login" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
  <a href="package.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PACKEGS</a>
  <a href="./contact.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>
</section>
<!-- Automatic Slideshow Images -->
<section>
  <!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<!-- Automatic Slideshow Images -->
<div class="mySlides w3-display-container w3-center">
  <img src="https://images.pexels.com/photos/2161449/pexels-photo-2161449.jpeg?auto=compress&cs=tinysrgb&w=400" style="width:100%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3>Los Angeles</h3>
    <p><b>We had the best time playing at Venice Beach!</b></p>   
  </div>
</div>
<div class="mySlides w3-display-container w3-center">
  <img src="https://images.pexels.com/photos/763771/pexels-photo-763771.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" style="width:100%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3>New York</h3>
    <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
  </div>
</div>
<div class="mySlides w3-display-container w3-center">
  <img src="https://images.pexels.com/photos/7245352/pexels-photo-7245352.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" style="width:100%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3>Chicago</h3>
    <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
  </div>
</div>

</section>

<!--prement  login Modal -->
<section>
  <div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div id="login" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32"> 
          <span onclick="document.getElementById('login').style.display='none'" 
         class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
          <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
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
          <button class="w3-button w3-red w3-section" onclick="document.getElementById('login').style.display='none'">Close <i class="fa fa-remove"></i></button>
          <p class="w3-right"><a href="#" class="w3-text-blue"></a></p>
        </div>
  </section>
  
  

  

<!-- The seal 50 % off  Recently Viewed Adventures -->
 <section>
 <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div  class="snip1418" class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/1496373/pexels-photo-1496373.jpeg?auto=compress&cs=tinysrgb&w=400" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div style="display:inline-block" class="add-to-cart"> <i class="ion-android-add"></i><span>-20% OFF</span></div>

          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
    
      </div>
          </div>
        </div>
       <div   class="snip1418" class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/1662628/pexels-photo-1662628.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Paris" style="width:100%" style="height:300px" class="w3-hover-opacity">
          <div style="display:inline-block" class="add-to-cart"> <i class="ion-android-add"></i><span>-20% OFF</span></div>

          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
    
      </div>
          </div>
        </div>
        <div  class="snip1418"  class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/1366919/pexels-photo-1366919.jpeg?auto=compress&cs=tinysrgb&w=400" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div style="display:inline-block" class="add-to-cart"> <i class="ion-android-add"></i><span>-20% OFF</span></div>

          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
  
      </div>
          </div>
        </div>
 </section>
<!-- no name salid img hubber itali -->

<section>
  <div class="cards-list">
       <div class="card 1">
         <div class="card_image"> <img src="https://images.pexels.com/photos/2404444/pexels-photo-2404444.jpeg?auto=compress&cs=tinysrgb&w=300" /> </div>
         <div class="card_title title-white">
         <p>ITALI</p>
  </div>
  </div>
  <div class="card 2">
  <div class="card_image">
      <img src="https://images.pexels.com/photos/3996362/pexels-photo-3996362.jpeg?auto=compress&cs=tinysrgb&w=300" />
  </div>
  <div class="card_title title-white">
    <p>Soidi</p>
  </div>
 </div>
 <div class="card 3">
  <div class="card_image">
    <img src="https://images.pexels.com/photos/7459424/pexels-photo-7459424.jpeg?auto=compress&cs=tinysrgb&w=300" />
  </div>
  <div class="card_title">
    <p>URIOP</p>
  </div>
</div>
</section>

  <!-- Embedding Fonts from google fonts -->

  <link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@700&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="style.css" />
<section class="team">
  <div class="display">
  <h2 class="section-heading">Our Team</h2>
  <div class="container">
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Kalyan</span>
    </div>
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1530577197743-7adf14294584?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Suchitra Tiwari</span>
    </div>

    <div class="profile">
      <img src="https://images.unsplash.com/photo-1598641795816-a84ac9eac40c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Sajid Ghani</span>
    </div>
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Dhriti</span>
    </div>
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1618018352910-72bdafdc82a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="" /><span class="name">Milind</span>
    </div>
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=801&q=80" alt="" /><span class="name">Srikant Tiwari</span>
    </div>
    <div class="profile">
      <img src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80" alt="" /><span class="name">Major Sameer</span>
    </div>
  </div>
    </div>
</section>
 <!-- The Tour Section -->
<sections>
 
  <div class="w3-black" id="tour">
      
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/4571925/pexels-photo-4571925.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
       <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/4825701/pexels-photo-4825701.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Paris" style="width:100%" style="height:300px" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/4673437/pexels-photo-4673437.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/2533090/pexels-photo-2533090.jpeg?auto=compress&cs=tinysrgb&w=400" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
       <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/2734521/pexels-photo-2734521.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/3163927/pexels-photo-3163927.jpeg?auto=compress&cs=tinysrgb&w=400" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/163792/model-planes-airplanes-miniatur-wunderland-hamburg-163792.jpeg?auto=compress&cs=tinysrgb&w=400" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
       <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/1552212/pexels-photo-1552212.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/4859887/pexels-photo-4859887.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <div class="price">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
      <s>$80.00</s>$19.00
      </div>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</sections>
<section>
  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
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
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>
  </section>


<!-- video -->

<section>
          <div class="container">
                <video src="./forest/pexels-film-composite-16296842-3840x2160-24fps.mp4" class="slider" autoplay loop muted controls>
                 </video>
            <ul>
               <li onclick="videoslider('./forest/pexels-film-composite-16296842-3840x2160-24fps.mp4')">
                  <video src="./forest/pexels-film-composite-16296842-3840x2160-24fps.mp4">
                    </video>
              </li>
              <li onclick="videoslider('./forest/forest.mp4')">
                  <video src="./forest/forest.mp4"></video></li>
              <li onclick="videoslider('./forest/pexels-pressmaster-3192303-3840x2160-25fps.mp4')">
                  <video src="./forest/pexels-pressmaster-3192303-3840x2160-25fps.mp4"></video></li>
              <li onclick="videoslider('./forest/pexels-yaroslav-shuraev-4125025-3840x2160-24fps.mp4')">
                 <video src="./forest/pexels-yaroslav-shuraev-4125025-3840x2160-24fps.mp4"></video></li>
             <li onclick="videoslider('./forest/pexels-kelly-2818546-3840x2160-24fps.mp4')">
                 <video src="./forest/pexels-kelly-2818546-3840x2160-24fps.mp4"></video></li>
            <li onclick="videoslider('./forest/pexels-kelly-2867873-3840x2160-24fps.mp4')">
                <video src="./forest/pexels-kelly-2867873-3840x2160-24fps.mp4"></video></li>
            </ul>
          </div>
</section>

   <!-- The servibes---- Section -->



<!-- image salaid --galary -->
<section>
     <div>
          <h1 style="text-align:center">GALLERY</h1>
     </div>
     <div class="containers" style="display:inline-block"  style="width:300px" style="height:300px" >
                 <img src="https://images.pexels.com/photos/16049383/pexels-photo-16049383/free-photo-of-a-tree-with-pink-leaves-and-people-in-front-of-a-mosque.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
           <div class="overlay"  style="width:300px" style="height:300px">
                 <img src="https://images.pexels.com/photos/1620372/pexels-photo-1620372.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                       <h1 class="text"><b>Amazing Places</b></h1>
                       <p class="texts">Find out what’s happening atal offers</p>
                       <button class="textss" href="./media.html"  >See More</button>     
            </div>
       </div>
       <div class="containers" style="display:inline-block" style="width:300px" style="height:300px">
                    <img src="https://images.pexels.com/photos/2070485/pexels-photo-2070485.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
             <div class="overlay"  style="width:300px" style="height:300px">
                    <img src="https://images.pexels.com/photos/1535162/pexels-photo-1535162.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                        <h1 class="text"><b>Amazing Places</b></h1>
                         <p class="texts">Find out what’s happening atal offers</p>
                         <button href="./media.html" class="textss">See More</button>     
               </div>
        </div>
        <div class="containers" style="display:inline-block" style="width:300px" style="height:300px">
                 <img src="https://images.pexels.com/photos/1624438/pexels-photo-1624438.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
             <div class="overlay" style="width:300px" style="height:300px">
                 <img src="https://images.pexels.com/photos/5914157/pexels-photo-5914157.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                 <h1 class="text"><b>Amazing Places</b></h1>
                 <p class="texts">Find out what’s happening atal offers</p>
                 <button class="textss">See More</button>     
            </div>
       </div>
        <div class="containers" style="display:inline-block"  style="width:300px" style="height:800px" >
               <img src="https://images.pexels.com/photos/437160/pexels-photo-437160.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
            <div class="overlay"  style="width:300px" style="height:800px">
                 <img src="https://images.pexels.com/photos/2832034/pexels-photo-2832034.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                <h1 class="text"><b>Amazing Places</b></h1>
                <p class="texts">Find out what’s happening atal offers</p>
                 <button class="textss">See More</button>     
           </div>
       </div>
       <div class="containers" style="display:inline-block"  style="width:300px" style="height:300px" >
               <img src="https://images.pexels.com/photos/3649174/pexels-photo-3649174.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
         <div class="overlay"  style="width:300px" style="height:300px">
               <img src="https://images.pexels.com/photos/3151191/pexels-photo-3151191.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
              <h1 class="text"><b>Amazing Places</b></h1>
               <p class="texts">Find out what’s happening atal offers</p>
                 <button class="textss">See More</button>     
          </div>
       </div>
       <div class="containers" style="display:inline-block"  style="width:300px" style="height:300px">
                     <img src="https://images.pexels.com/photos/2754200/pexels-photo-2754200.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
            <div class="overlay"  style="width:300px" style="height:300px">
                  <img src="https://images.pexels.com/photos/4385716/pexels-photo-4385716.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                  <h1 class="text"><b>Amazing Places</b></h1>
                    <p class="texts">Find out what’s happening atal offers</p>
                   <button class="textss">See More</button>     
            </div>
       </div>
       <div class="containers" style="display:inline-block"  style="width:300px" style="height:300px" >
                 <img src="https://images.pexels.com/photos/3402751/pexels-photo-3402751.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
            <div class="overlay"  style="width:300px" style="height:300px">
                 <img src="https://images.pexels.com/photos/3889742/pexels-photo-3889742.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Avatar" class="image" style="width:300px" style="height:300px">
                 <h1 class="text"><b>Amazing Places</b></h1>
                  <p class="texts">Find out what’s happening atal offers</p>
                   <button class="textss">See More</button>     
            </div>
       </div>
       <div class="containers" style="display:inline-block"   style="width:300px" style="height:300px">
                  <img src="https://images.pexels.com/photos/2291428/pexels-photo-2291428.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
           <div class="overlay"  style="width:300px" style="height:300px">
                  <img src="https://images.pexels.com/photos/2792601/pexels-photo-2792601.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" class="image" style="width:300px" style="height:300px">
                  <h1 class="text"><b>Amazing Places</b></h1>
                  <p class="texts">Find out what’s happening atal offers</p>
                  <button class="textss">See More</button>     
           </div>
           
       </div>
  </section>

<!-- image nig mack galary--- TourRadar Spotlight -->

<section>
        <h1 style="text-align: center">TourRadar Spotlight</h1>
        <p  style="text-align: center">Find out what’s happening at TourRadar - from the latest 
         travel news to our special offers.
        </p>
        <div class="cards" >
        <img src="https://images.pexels.com/photos/1366957/pexels-photo-1366957.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Avatar" style="width:100%">
        <h1 >Deals of The Week </h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn.tourradar.com/s3/content-pages/391/686x384/SLFisa.png" alt="Avatar" style="width:100%">
        <h1 >Our Climate Action Plan</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn.tourradar.com/s3/content-pages/391/686x384/pFVse1.jpg" alt="Avatar" style="width:100%">
        <h1 >All sessions on-demand</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
</sections>

      
<!-- Ticket Modal -->
<section>
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>
</section>
  
<!-- revew -->

<section>
      <div>
      <h1 style="text-align: center"><b>REVIEW</b></h1>
    </div>
    <div>
    <div class="cards" >
        <img src="https://images.pexels.com/photos/13942274/pexels-photo-13942274.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Affordable Hotels</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>
      </p>
        </div>
        
        <div class="cards" >
        <img src="https://images.pexels.com/photos/6817727/pexels-photo-6817727.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Food And Drinks</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>
        </p>
        </div>
        <div class="cards" >
        <img src="https://images.pexels.com/photos/9451272/pexels-photo-9451272.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Safty Guide Fasr</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>
      </p>
        </div>
        <div class="cards" >
        <img src="https://images.pexels.com/photos/5263287/pexels-photo-5263287.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Around </h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
        </div>
      </p>
        </div>
        <div class="cards" >
        <img src="https://images.pexels.com/photos/16015323/pexels-photo-16015323/free-photo-of-young-couple-standing-face-to-face-and-smiling.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Fast Travel</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
       <span class="fa fa-star"></span>
       <span class="fa fa-star"></span>
        </div>
      </p>
        </div>
        <div class="cards" >
        <img src="https://images.pexels.com/photos/9222066/pexels-photo-9222066.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Adventures</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        <div class="price" style="display:inline-block">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        </div>
      </p>
        </div>
        
    </div>
</section>


<!-- Automatic Slideshow Images -->

<section>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://th.bing.com/th/id/OIP.5eZCqiW0TEt3FeY2_di0cwHaHa?pid=ImgDet&w=206&h=206&c=7" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>We had the best time playing at Venice Beach!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://th.bing.com/th/id/OIP.0hYitUyQo8PdyTUJaQNivQHaDC?pid=ImgDet&rs=1" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
</section>



<!-- Footer -->

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="login.php" target="_blank">farjama Akter mim</a></p>
</footer>
<!--futter-->

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
  setTimeout(carousel, 3000);    
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
  setTimeout(carousel, 3000);    
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
</script>



</body>
</html>