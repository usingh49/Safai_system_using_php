<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
<style>
    
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: teal;
    clear: left;
    text-align: center;
}

    
    
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 25px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: lightgreen;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: Grey;
    color: white;
}
</style>
</head>
<body>
 
<div class="container">
<div class="w3-row w3-border">
  <div class="w3-container w3-teal">
      <center><h1 style="height:62px;"><a href="home.php">SAFAI.in</a></h1></center>
  </div>
  
</div>
<header>
   <h1>Green Zone</h1>
</header>    

<table id="t01">
  <tr>
    <th>Name of Areas</th>
    <th>Zones</th> 
    <th>Description</th>
    <th>Loaction</th>
  </tr>
  <tr>
    <td>Vijay Nagar</td>
    <td>Green</td>
    <td><p>Vijay Nagar is a major residential area in Indore, Madhya Pradesh, India.
            Developed by the Indore Development Authority, the suburb saw a boom in population
            in the late 1990s. Real estate prices have since shot up and are among the highest 
            in Indore, in part because of the continued influx of immigrants. Vijay Nagar is 
            located in the eastern part of the city and is nestled between MR-9, MR-10, and 
            Eastern Ring Road. Lately, with the development of Indore BRTS, the area has witnessed 
            rampant growth.</p></td>
    <td><a href="google.com">Click here to find Location</a></td>
  </tr>
  <tr>
    <td>Palasia</td>
    <td>Green</td>
    <td><p>Palasia is the most affluent and expensive area of Indore,
            the largest city in the Indian state of Madhya Pradesh.
            Palasia is known for its education hub. It has many coaching 
            institutes for IIT-JEE, Medical and School Coaching. There is also
            a mosque and dargah in the area along with a public garden. Most banks
            have buildings in the area. The area has more than 2000 houses and buildings. 
            The old National Highway 3 known as AB road separates Old Palasia and New Palasia.</p></td>
    <td><a href="google.com">Click here to find Location</a></td>
  </tr>
  <tr>
    <td>LIG</td>
    <td>Green</td>
    <td><p>LIG is a residential locality within Indore, Madhya Pradesh, India. 
            Started by the Indore Development Authority. Real estate prices have
            shot up and are comparable to the posh areas of Indore, in large part
            because of the continued boom of immigrants.<br>
Postal Code: 452009</p></td>
    <td><a href="google.com">Click here to find Location</a></td>
  </tr>
    <td>Geeta Bhawan</td>
    <td>Green</td>
    <td><p>Geeta Bhawan is a residential locality in the city Indore, Madhya Pradesh, India. Real estate prices
            have shot up and are comparable to any posh areas of Indore, in large part because of 
            the continued boom of immigrants.</p></td>
    <td><a href="google.com">Click here to find Location</a></td>
  </tr>
</table>

<footer><center>Clean Indore</center></footer>

</div>    
    
</body>
</html>