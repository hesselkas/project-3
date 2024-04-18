
<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">

    <ul class="nav-list">
        <img class="logo"  src="images-removebg-preview.png">
        <li><a href="index.php">Home</a></li>
        <li><a href="over_ons.php">About&nbsp;Us</a></li>
        <li><a href="webshop.php">Webshop</a></li>
        <li><a href="zakelijk.php">Zakelijk</a></li>
        <li><a href="services.php">Service</a></li>
        <li><a href="reparaties.php">Reparaties</a></li>
        <li><a href="ITNieuws.php">IT&nbsp;Nieuws</a></li>
    </ul>
</nav>

<div class="login-container">
    <h2>Reparatie boeken</h2>
    <form class="login-form" action="zakelijk.php" method="post">
        <div class="empty-rows">
            <input type="text" placeholder="Merk">
            <input type="text" placeholder="Model">
            <input type="text" placeholder="Soort device">
            <input type="text" placeholder="Fabricatiedatum">
            <input type="text" placeholder="Garantiedatum">
            <input id="klacht" type="text" placeholder="Klachtomschrijving">
        </div>
        <div class="form-group">
            <input type="submit" value="Verstuur">
        </div>
    </form>
</div>

</body>
</html>
<div class="footer">
    <h3 id="textfooter"> Zuidbaan 514, 2841MD Moordrecht</h3>
    <h3 id="textfooter2">+316 30 985 409 Servicenummer  +3118 28 202 18 Kantoor,</h3>
    <h3 id="textfooter3"> Bereikbaar van 09:00 - 18:00</h3>
    <div class="socials">
        <a href="https://www.facebook.com/ikmaakhetwel.nl/"><img class="facebook" src="facebook.png"> </a>
        <a href="https://www.linkedin.com/in/john-sips-7712b011/?locale=nl_NL"><img class="facebook" src="linkedin.png"> </a>
        <a href="https://www.instagram.com/ikmaakhetwel/"><img class="facebook" src="instagram.png"> </a>

    </div>
</div>
<img class="background1" src="40gp-uneedit.jpg">


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new PDO('mysql:host=localhost;dbname=voorbeeld_database'
    , "root", "");
$statement = $db->prepare("SELECT * FROM vogels");
$statement->execute();
$data = $statement->fetchAll();
