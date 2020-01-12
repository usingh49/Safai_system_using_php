<?php
session_start();
if(isset($_SESSION['role'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
    <title>Log-in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
<style>
input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color:#f2f2f2;
    padding: 20px;
}
</style>

<body>

<div class="w3-row w3-border">
  <div class="w3-container w3-teal">
      <center><h1 style="height:62px;"><a href="home.php">SAFAI.in</a></h1></center>
  </div>
  
</div> 
<hr>
<div class="login_link">
    <p align="right">Create account <a href="http://localhost/safai.in/register.php">Register</a></p>
</div>
<div>
    <?php if(isset($_GET['message'])){
        echo $_GET['message'];
    } ?>
    <form action="checklogin.php" method="post">
    <br><label for="fname">Registered ID</label><br>
    <input type="text" id="fname" name="email" placeholder="Enter Your ID(Your Email)">

    <br><label for="lname">Password</label><br>
    <input type="password" id="lname" name="password" placeholder="Enter Your Password">
    <br>
    <input type="submit" value="Submit" name="login">
   
  </form>
</div>
</body>
</html>