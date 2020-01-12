<?php
if(isset($_POST['register'])){
    $fname=$_POST['firstname'];
   
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $feedback = $_POST['feedback'];
   $con= mysqli_connect('localhost','root','','safai');
   //mysqli_select_db(,$con);
  $query = "INSERT INTO feedback (name,email,pno,comm) VALUES ('$fname','$email','$contactno','$feedback')";
    $result = mysqli_query($con,$query);
    if($result==1){
       header('location:index.php');
    }else{
      header('location:feedback.php');
    }
}
?>