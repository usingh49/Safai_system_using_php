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
    <form action="createaccount.php" method="post">
    <br><label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" required="required" placeholder="First Name">

    <br><label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" required="required" placeholder="Last Name">

      <br>
      Date of birth:<br>
      <select name="dates" required="required" > 
      <option>Date</option> <option>01</option> <option>02</option> <option>03</option> <option>04</option> <option>05</option> <option>06</option> 
      <option>07</option> <option>08</option> <option>09</option> <option>10</option> <option>11</option> <option>12</option> <option>13</option>
      <option>14</option> <option>15</option> <option>16</option> <option>17</option> <option>18</option> <option>19</option> <option>20</option> 
      <option>21</option> <option>22</option> <option>23</option> <option>24</option> <option>25</option> <option>26</option> <option>27</option> 
      <option>28</option> <option>29</option> <option>30</option> <option>31</option>
      </select>
      <select name="months" required="required" >
      <option>Month</option> <option>January</option> <option>February</option> <option>March</option> <option>April</option> <option>May</option> 
      <option>June</option> <option>July</option> <option>August</option> <option>September</option> <option>October</option> <option>November</option> 
      <option>December</option>
      </select>
      <select name="years" required="required" > 
      <option>Year</option> <option>1950</option> <option>1951</option> <option>1952</option> <option>1953</option> <option>1954</option> <option>1955</option> 
      <option>1956</option> <option>1957</option> <option>1958</option> <option>1959</option> <option>1960</option> <option>1961</option> <option>1962</option> 
      <option>1963</option> <option>1964</option> <option>1965</option> <option>1966</option> <option>1967</option> <option>1968</option> <option>1969</option> 
      <option>1970</option> <option>1971</option> <option>1972</option> <option>1973</option> <option>1974</option> <option>1975</option> <option>1976</option> 
      <option>1977</option> <option>1978</option> <option>1979</option> <option>1980</option> <option>1981</option> <option>1982</option> <option>1983</option> 
      <option>1984</option> <option>1985</option> <option>1986</option> <option>1987</option> <option>1988</option> <option>1989</option> <option>1990</option> 
      <option>1991</option> <option>1992</option> <option>1993</option> <option>1994</option> <option>1995</option> <option>1996</option> <option>1997</option>
      <option>1998</option> <option>1999</option> <option>2000</option> <option>2001</option> <option>2002</option> <option>2003</option> <option>2004</option> 
      <option>2005</option> <option>2006</option> <option>2007</option> <option>2008</option> <option>2009</option> <option>2010</option> <option>2011</option> 
      <option>2012</option> <option>2013</option> <option>2014</option> <option>2015</option> <option>2016</option> <option>2017</option> 
      </select><br>
      <br>
      Gender :<br>
      <input type="radio" name="gender" value="male" checked>Male<br>
      <input type="radio" name="gender" value="female">Female<br>
      <input type="radio" name="gender" value="other">Other<br>
      Email :<br>
      <input type="text" id="email" name="email" required="required"  placeholder="Your Email Address">
      <br>
      Password :<br>
      <input type="password" id="password" name="password" required="required"  placeholder="Your Password">
      <br>
      Contact No. :<br>
      <input type="text" id="cno" name="contactno" maxlength="10" required="required"  placeholder="Your Contact No.">
      <br>
  
      <input type="submit" value="Submit" name="register">
  </form>
</div>


</html>
