<?php
if(isset($_POST['register'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $dates=$_POST['dates'];
    $months=$_POST['months'];
    $years=$_POST['years'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contactno=$_POST['contactno'];
   $con= mysqli_connect('localhost','root','','safai');
   //mysqli_select_db(,$con);
  $query = "INSERT INTO registration (firstname,lastname,dates,months,years,gender,email,password,contactno,role) VALUES ('$fname','$lname','$dates','$months','$years','$gender','$email','$password','$contactno','user')";
    $result = mysqli_query($con,$query);
    if($result==1){
       header('location:login.php?message=Registration successfully please login');
    }else{
      header('location:register.php?message=registration not successfully');
    }
}
?>