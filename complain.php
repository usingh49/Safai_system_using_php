<?php
session_start();
if(!isset($_SESSION['role'])){
    header('location:index.php');
}
?><!DOCTYPE html>
<html>
    <title>Activities</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<style>
input[type=text], select {
    width: 45%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 45%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 45%;
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
    padding: 10px;
}    
.vl {
    border-left: 2px solid green;
    height: 500%;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 10;
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
 
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: center;
}

table#t01 th {
    background-color: Grey;
    color: white;
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
  <!--<li><a href="areas.html">AREAS</a></li>
  <li><a href="membership.html">MEMBERSHIP</a></li>-->
  <!--<li><a href="activity.html">ACTIVITIES</a></li>-->
  <li><a href="pledge.html">TAKE A PLEDGE</a></li>
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

<div>
    <a href="complainadd.php">Complain Add</a>
    <?php if(isset($_GET['message'])){
        echo $_GET['message'];
    } ?>
<table id="t01">
  <tr>
    <th>Address</th>
    <th>Description</th> 
    <th>Image</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  
      <?php
    $userid = $_SESSION['userid'];
    $role = $_SESSION['role'];
   $con= mysqli_connect('localhost','root','','safai');
   // mysql_select_db('safai');
    if($role=='admin'){
        $query = "select * from complain order by id desc";
    }else{
    $query = "select * from complain where user_id=$userid order by id desc";
    }
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){ ?>
        <tr>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><img src="<?php echo 'uploads/'.$row['images']; ?>" height="50" width="50" /> </td>
    <td>
        <?php if($role=='admin'){ ?>
        <a href="<?php echo 'changestatus.php?complain_id='.$row['id']; ?>"/><?php echo $row['status']; ?></a>
        <?php } else{
            ?>
        <?php echo $row['status']; ?>
        <?php
        }?>
    </td>
    <td>
        <a href="<?php echo 'complainedit.php?complain_id='.$row['id']; ?>">Edit</a>
        <a href="<?php echo 'complaindelete.php?complain_id='.$row['id']; ?>">Delete</a>
    </td>
  </tr>
  <?php
    }
    
      ?>
    <?php } else{
        ?>
  <tr><td colspan="4">No record found</td></tr>
  <?php
    } ?>
</table>
</div>
</body>
</html>
