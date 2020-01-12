<!DOCTYPE html>
<html>
    
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    
<style>
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 9.7%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
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
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<div class="w3-row w3-border">
  <div class="w3-container w3-teal">
      <center><h1 style="height:62px;"><a href="home.php">SAFAI.in</a></h1></center>
  </div>
  
</div>
<div class="Register_link">

    <p align="right">Already have an Account? <a href="login.php">Login</a></p>
</div>

<div>
    <?php if(isset($_GET['message'])){
        echo $_GET['message'];
    } ?>
    <form action="createfeedback.php" method="post">
    <br><label for="fname">Name</label><br>
    <input type="text" id="fname" name="firstname" required="required" placeholder="Name">

    

     
     
      
      <br>
     
      Email :<br>
      <input type="text" id="email" name="email" required="required"  placeholder="Your Email Address">
      <br>
     
      Contact No. :<br>
      <input type="text" id="cno" name="contactno" maxlength="10" required="required"  placeholder="Your Contact No.">
      <br>
      Feedback:<br>
      <textarea  id="feedback" name="feedback" required="required"  placeholder="Your feedback" rows="5" cols="40"> </textarea>
      <br>
      <input type="submit" value="Submit" name="register">
  </form>
</div>


</html>
