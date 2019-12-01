<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>BikeSite - Animations</title>
</head>
<body>
<header class="header">
    <div class="container fluid">
        <img id="logo" src="img/logo.jpg" height="100" width="130" alt="BikeSite logo - BS"/>
        <div id="header-animation">
            <video width="160" height="120" autoplay loop muted playsinline>
                <source src="./img/bike_silhuoette.webm" type="video/webm">
                Silhouette of man riding bike.
            </video>
        </div>
    </div>
</header>
<div class="container-fluid" style="padding-top: 99px;">
    <div class="row">
        <ul class="col-xs-12 col-sm-9 col-md-3 col-lg-3 sidenav">
            <li><a href="./home.php">Home Page</a></li>
            <li><a href="./registration.php">Registration</a></li>
            <li><a href="./animations.php">Animations</a></li>
            <li>Store coming soon!</li>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <img id ="animation1" src="img/mbs.jpg" height="257" width="238" alt="Mountain Biker Silhuoette"/>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p><a href="https://www.bikeride.com/guide/">Videos on Bicycle Repair and Maintenance</a>  -
            <a href="https://www.active.com/cycling">Find cycling events near you</a>  -
            <a href="https://www.wikihow.com/Ride-a-Bicycle">Learn how to ride a bike</a></p>
        <p><a href="https://www.nhtsa.gov/road-safety/bicycle-safety">Learn about bicycle safety</a></p>
    </div>
</footer>
</body>
</html>