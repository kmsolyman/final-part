<!DOCTYPE html>
<html lang="en">
<head>
   <title>contact</title>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
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
     padding: 48px;
   
     display: -ms-flexbox; /* IE10 */
     display: flex;
     -ms-flex-wrap: wrap; /* IE10 */
     flex-wrap: wrap;
     margin: 20 56px;
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
     padding: 700 906px;
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
       margin-bottom: 200px;
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
  <a href="package.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PACKEGS</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>

<sections>
    <div>
      <h1 style="text-align: center"><b>SERVICES</b></h1>
    </div>
    <div>
    <div class="cards" >
        <img src="https://th.bing.com/th/id/R.e780db55109d72e3a43ba90ebd713631?rik=ZNjOAaEglMEDzA&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_221506.png&ehk=M9quQA6lwi0SExEd1HKt1%2fos9D%2fzFQFpmf7CAcWbBIw%3d&risl=&pid=ImgRaw&r=0" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Affordable Hotels</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn2.iconfinder.com/data/icons/food-drinks-vol-2-1/48/052-512.png" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Food And Drinks</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://dynovoglobal.com/wp-content/uploads/2019/06/safety-icone.png" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Safty Guide</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn0.iconfinder.com/data/icons/shopping-and-commerce-2-12/66/78-512.png" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Around The World</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn1.iconfinder.com/data/icons/circle-saigon-attractions/40/035-airport-plane-flight-transport-512.png" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Fast Travel</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        <div class="cards" >
        <img src="https://cdn4.iconfinder.com/data/icons/positive-character-traits-alphabet-a/250/positive-A001-512.png" alt="Avatar" style="width:100%">
        <h1 style="text-align: center">Adventures</h1>
        <p>
        With 24/7 customer service, flexible 
        booking conditions and extensive insurance options, we are there for you when 
        plans change. See my Options
        </p>
        </div>
        </div>
</sections>

<!-- The Contact Section -->

<section>
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="CONTACT">
        <h2 class="w3-wide w3-center">CONTACT</h2>
        <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
        <div class="w3-row w3-padding-32">
          <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
            <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
          </div>
          <div class="w3-col m6">
            <form  method="POST" action="#" target="_blank">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Name" required  name="firstname">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Email" required  name="email">
                </div>
              </div>
              <input class="w3-input w3-border" type="text" placeholder="Message" required  name="address">
              <button class="w3-button w3-black w3-section w3-right" type="submit"  value="submit" class="btn"  name="submit">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="./about.html" target="_blank">farjama Akter mim</a></p>
  </footer>
  <!--futter-->
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
  <?php
       if(isset($_POST['submit']))
      {
        $_firstname  = $_POST['firstname'];
        $_email      = $_POST['email'];
        $_address    = $_POST['address'];
   
    
       $query = "INSERT INTO  bilform VALUES('$_firstname','$_email','$_address')";
  
             $data = mysqli_query($conn,$query);
      }
  ?>
  </section>
</body>
</html>