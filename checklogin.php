<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con= mysqli_connect('localhost','root','','safai');
   // mysql_select_db('safai');
    $query = "select * from registration where email='$email' and password = '$password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['userid']=$row['id'];
        $_SESSION['role']=$row['role'];
        header('location:home.php');
    }else{
        header('location:login.php?message=Email Id or password do not matche');
    }
}
?>