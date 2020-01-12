<!DOCTYPE html>
<html>
    <title>Create Account</title>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>   
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="home1.php" type="text/css">        
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
<div>
    <?php
if(isset($_POST['pladge_btn'])){
    $emailid=$_POST['emailid'];
    $name=$_POST['name'];
    $pledge_name=$_POST['pledge_name'];
    $con= mysqli_connect('localhost','root','','safai');
    //mysql_select_db('safai');
    $query = "INSERT INTO pledge (emailid,name,pledge) VALUES ('$emailid','$name','$pledge_name')";
    $result = mysqli_query($con,$query);
    if($result==1){
        header('location:pledge.php?message=Registration successfully');
    }else{
        header('location:pledge.php?message=registration not successfully');
    }
}
?>
<?php
if(isset($_GET['pledge'])){
    $pledge = $_GET['pledge'];
}
?>
    <form method="post" action="">
    <label for="fname">Enter Your ID</label><br>
    <input type="text" id="fname" name="emailid" placeholder="Create Your ID(Email Address)">
    <br><label for="lname">Enter Name</label><br>
    <input type="text" id="lname" name="name" placeholder="Enter Your Name">
    <br>
    <input type="hidden" name="pledge_name" value="<?php echo $pledge ?>" />
    <br>
    <input type="submit" value="Submit" name="pladge_btn">
    <br>
    <hr>
    <br>
    </form>
</div>    
</body>
</html>