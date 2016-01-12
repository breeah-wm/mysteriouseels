<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Mysterious Eels</title>
    <link rel="stylesheet" type="text/css" href="boats.css" />
</head>
<body>
<div class="overlay"></div>
<!--Type of boat-->
<div id="header">
    <p>Pontoon Boats</p>
</div>
<!--Navigation bar-->
<div id="nav" class="nav">
    <ul class="nav">
        <li><a href="boat1.php">Center Consoles</a></li>
        <li><a href="boat2.php">Deck Boats</a></li>
        <li><a href="boat3.php">Cuddy Cabins</a></li>
        <li><a href="boat4.php">High Performance</a></li>
        <li><a href="boat5.php">Jet Boats</a></li>
        <li><a href="boat6.php" class="active">Pontoon Boats</a></li>
    </ul>
</div>
<div id="body">
    <!--Boat information-->
    <img src="http://panamacitybeachfishing.net/wp-content/uploads/2014/04/avalon-gs-quad-lounger.jpg">
    <h2>About This Boat</h2>
    <p>This boat is good for day cruising. The maximum amount of people that can fit is 10 people.
        The size ranges from 14-26 ft. It has jet propulsion.</p>
    <h3>Rental Prices:</h3>
    <h4>Half Day: $360</h4>
    <h4>Full Day: $450</h4>
</div>
<div id="form">
    <!--Reservation information-->
    <form>
        First name
        <input type="text" name="firstname"><br>
        Last name
        <input type="text" name="lastname"><br>
        E-mail
        <input type="text" name="email"><br>
        Password
        <input type="password" name="pword"><br>
        Phone Number (Optional)
        <input type="text" name="phone"><br>
        Card Number
        <input type="text" name="card"><br>
        CVV Number
        <input type="text" name="cvv"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<div id="footer">
    <!--Takes the user back to the home page-->
    <button id="myButton" class="homeButton">Back to Home page</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "firstpage.html";
        };
    </script>
</div>
</body>
</html>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysteriouseels", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>