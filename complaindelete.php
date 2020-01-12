<?php
if(isset($_GET['complain_id'])){
    $complain_id=$_GET['complain_id'];
    $con= mysqli_connect('localhost','root','','safai');
   // mysql_select_db('safai');
    $query = "delete from registration where id=$complain_id";
    $result = mysqli_query($con,$query);
    header('location:complain.php?message=Complain deleted successfully');
    
}
?>