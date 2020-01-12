<!DOCTYPE html>
<html>
    <title>Pledge</title>
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
input[type=comment], select {
    width: 25%;
    padding: 50px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit],button {
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
a {
    width: 45%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>
</head>
<body>

<div class="w3-row w3-border">
  <div class="w3-container w3-teal">
      <center><h1 style="height:62px;"><a href="home.php">SAFAI.in</a></h1></center>
  </div>
  
</div>

<div>
    <?php if(isset($_GET['message'])){
        echo $_GET['message'];
    } ?>
    
    <form action="createaccount.html">
    <hr>
    <div class="w3-row w3-border">
        <div class="w3-container w3-half ">
         <p>Mahatma Gandhi dreamt of an India which was not only free but also clean and developed.

Mahatma Gandhi secured freedom for Mother India.<br>
<br>
Now it is our duty to serve Mother India by keeping the country neat and clean.<br>
<br>
I take this pledge that I will remain committed towards cleanliness and devote time for this.<br>
<br>
I will devote 100 hours per year, that is two hours per week, to voluntarily work for cleanliness.<br>
<br>
I will neither litter not let others litter.<br>
<br>
I will initiate the quest for cleanliness with myself, my family, my locality, my village and my work place.<br>
<br>
I believe that the countries of the world that appear clean are so because their citizens don't indulge in littering nor do they allow it to happen.

With this firm belief, I will propagate the message of Clean Indore Mission in every areas and towns of indore.<br>
<br>
I will encourage 100 other persons to take this pledge which I am taking today.<br>
<br>
I will endeavour to make them devote their 100 hours for cleanliness.<br>
<br>
I am confident that every step I take towards cleanliness will help in making my city and country clean.<br>
<br>
I pledge to segregate my (household, shop, establishment) waste in two dustbins, wet waste in Green and dry waste in Blue, as my contribution to the Clean Indore Mission.</p> 
<br>
<a href="createpledge.php?pledge=individual"/>Take a Individual Pledge</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<a href="createpledge.php?pledge=mass"/>Take a Mass Pledge</a>
<!--<a href="createpledge.php?pledge=individual" /><button>Take a Individual Pledge</button></a>
<button><a href="createpledge.php?pledge=mass" />Take a Mass Pledge</a></button>
-->        
        </div>
        <?php
        $mass_pledge=0;
        $indi_pledge=0;
        $con= mysqli_connect('localhost','root','','safai');
        //mysql_select_db('safai');
        $query_mass = "SELECT count(*) as pledge_mass FROM `pledge` WHERE pledge='mass'";
        $result_mass = mysqli_query($con,$query_mass);
        if(mysqli_num_rows($result_mass)>0){
        $mass=mysqli_fetch_assoc($result_mass);
        $mass_pledge=$mass['pledge_mass'];
        }
        $query_indi = "SELECT count(*) as pledge_indi FROM `pledge` WHERE pledge='individual'";
        $result_indi = mysqli_query($con,$query_indi);
        if(mysqli_num_rows($result_indi)>0){
        $indi=mysqli_fetch_assoc($result_indi);
        $indi_pledge=$indi['pledge_indi'];
        }
        ?>
          
        <div class="w3-container w3-half">
          <br><h1><center>Total Number of Individual Pledges : <?php echo $indi_pledge; ?> 
          </h1></center><br>
          <hr>
          <br><h1><center>Total Number of Mass Pledges : <?php echo $mass_pledge; ?></h1></center><br>
          <hr>
        </div>
    </div>
    </form>
</div>
</body>
</html>
