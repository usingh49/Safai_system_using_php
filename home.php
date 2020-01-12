<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>   
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="home1.php" type="text/css">
        
    
<style>
    
input[type="text"] {
                width: 150px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('searchicon.png');
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            input[type=text]:focus {
                width: 50%;
            }
    
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: teal;
}
.new{background-color:teal;}

li {
    float: left;
}



li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: pink;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: teal;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: pink}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 55%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

</style>
</head>
<body>
    
<div class="w3-row w3-border">
  <div class="w3-container w3-teal">
      <center><h1 style="height:62px;"><a href="home.php">SAFAI.in</a></h1></center>
  </div>
  
</div>


  
<ul>
    <li><a href="home.php">HOME</a></li>
  <li><a href="areas.html">AREAS</a></li>
  <!--<li><a href="membership.html">MEMBERSHIP</a></li>
  <li><a href="activity.html">ACTIVITIES</a></li>-->
  <li><a href="pledge.php">TAKE A PLEDGE</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ZONES</a>
    <div class="dropdown-content">
        <a href="greenzone.html">GREEN</a>
        <a href="bluezone.html">BLUE</a>
        <a href="redzone.html">RED</a>
    </div>  
  </li>
  <!--<li><a href="report.html">GALLERY</a></li>-->
  <li><a href="complain.php">COMPLAIN</a></li>
  <li style="float: right;"><a href="logout.php">LOGOUT</a></li>
</ul>
<br>
<div class="container">
    <div class="row">
        <div class="md-col-12">
  <img class="mySlides" src="safai1.jpg" style="height:50%" style="width:100%">
  <img class="mySlides" src="safai2.jpg" style="height:50%" style="width:100%">
  <img class="mySlides" src="safai3.jpg" style="height:50%" style="width:100%">
  
  <button class="prev" onclick="plusDivs(-1)">&#10094;</button>
  <button class="next" onclick="plusDivs(1)">&#10095;</button>
    </div>
  
    </div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<!--
<div class="w3-container w3-teal">
           <div class="row">
               
                        <div class="col-md-6" style="text-align:center;">
                            <h1>hjg</h1>
                    <div class="row" style="text-align: center;">
                        <div class="col-md-3">Home</div>
                        <div class="col-md-3">About us</div>
                        <div class="col-md-3">Contact Us</div>
                         <div class="col-md-3">Gallery</div>
                        
                    </div>
                        </div>
                        <div class="col-md-6" style="text-align:center;">
                             <h1>hjg</h1>
                  
                        </div>
            </div>
                
</div>
-->
<div class="w3-container w3-teal">
           <div class="w3-cell-row">
               <div class="w3-container w3-half w3-teal w3-cell w3-mobile">
                    <div class="w3-cell-row">
                        <br>
                        <br>
                        <br>
                        <div class="w3-container w3-third w3-teal w3-cell w3-mobile">
                            <center><a href="home.php">Home</a></center>
                        </div>
                       
                        <div class="w3-container w3-third w3-teal w3-cell w3-mobile">
                            <center><a href="t&c.html">Terms & Conditions</a></center>
                        </div>
			<div class="w3-container w3-third w3-teal w3-cell w3-mobile">
                            <center><a href="linktous.html">Link to Us</a></center>
                        </div>
                        <br>
                        <br>
                        <div class="w3-container w3-third w3-teal w3-cell w3-mobile">
                            <center><a href="feedback.php">Feedback</a></center>
                        </div>
                         
                        <div class="w3-container w3-third w3-teal w3-cell w3-mobile">
                            <center><a href="contactus.html">Contact Us</a></center>
                        </div> 
                        <br>
                       
                    </div>
                   
                </div>
                <div class="w3-container w3-half w3-teal w3-cell w3-mobile">
                    <div class="col-md-6"  style="height:200px;width:500px;background-image: url(logo2.jpg); float: right;background-size:100% 100%;">
  
                  
                </div>
                </div>
            </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>
