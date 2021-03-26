<!DOCTYPE html>
<?php
    include 'connectionInfo.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>BikeSite - Home</title>
</head>
<body id="home-body">
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
            <?php if($_SESSION["currentUser"] !== "") :?>
            <li><?php echo "Hello, " . $_SESSION["firstName"]?></li><br><br>
            <li><a href="./home.php">Home Page</a></li>
            <li>View Cart</li>
            <li><a href="./logout.php">Logout</a></li>
            <?php else :?>
            <li><a href="./home.php">Home Page</a></li>
            <li><a href="loginPage.php">Login</a></li>
            <li><a href="./registration.php">Register</a></li>
            <?php endif; ?>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox-wide">
                <h2>Welcome to BikeSite, where you can browse hundreds of bikes at factory-direct prices!</h2>
                <h3>Preview our selection here!</h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="gallery">
                        <a target="_blank" href="img/fuji-transonic-carbon-racing.jpg">
                            <img src="img/fuji-transonic-carbon-racing.jpg" height="360" width="600" alt="Blue Fuji Carbon Fiber Sport Bike"/></a>
                        <div class="desc">Fuji Transonic 2.3 - Full Carbon Fiber Racing Bike - $1999</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/kestrel-talon-x-carbon.jpg">
                            <img src="img/kestrel-talon-x-carbon.jpg" height="360" width="600" alt="Blue Kestrel Carbon Fiber Racing Bike"/></a>
                        <div class="desc">Kestrel Talon X - Racing Bike - AeroCarbon Frame - $2249</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/motobecane-immortal-carbon.jpg">
                            <img src="img/motobecane-immortal-carbon.jpg" height="360" width="600" alt="Red Motobecane Carbon Fiber Racer"/></a>
                        <div class="desc">Motobecane Immortal Series - Full Carbon Fiber Road Bike - $1799</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/moto-womens-road.jpg">
                            <img src="img/moto-womens-road.jpg" height="360" width="600" alt="Teal Women's Carbon Road Bike"/></a>
                        <div class="desc">Motobecane Gigi - Women's Carbon Road Bike - $1599</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/moto-grand-record-carbon-fork.jpg">
                            <img src="img/moto-grand-record-carbon-fork.jpg" height="360" width="600" alt="Yellow Motobecane Road Bike"/></a>
                        <div class="desc">Motobecane Grand Record - Road Bike with Carbon Fork - $1299</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="gallery">
                        <a target="_blank" href="img/gravity-fsx-full-susp.jpg">
                            <img src="img/gravity-fsx-full-susp.jpg" height="360" width="600" alt="Red Gravity Full Suspension Mountain Bike"/></a>
                        <div class="desc">Gravity FSX - Full Suspension Mountain Bike with Disc Brakes - $999</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/windsor-trail-fs-mountain.jpg">
                            <img src="img/windsor-trail-fs-mountain.jpg" height="360" width="600" alt="Black Full Suspension Mountain Bike"/></a>
                        <div class="desc">Windsor Trail FS - Full Suspension Mountain Bike - $749</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/moto-fantom-orange.jpg">
                            <img src="img/moto-fantom-orange.jpg" height="360" width="600" alt="Orange Motobecane Mountain Bike"/></a>
                        <div class="desc">Motobecane Fantom - Mountain Bike with Front Shocks - $599</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/gravity-liberty-cx.jpg">
                            <img src="img/gravity-liberty-cx.jpg" height="360" width="600" alt="Lime Green Gravity Cyclocross Bike"/></a>
                        <div class="desc">Gravity Liberty CX - Cyclocross Bike, Aluminum Frame - $499</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="img/gravity.jpg">
                            <img src="img/gravity.jpg" height="360" width="600" alt="Blue Gravity Cyclocross Bike"/></a>
                        <div class="desc">Gravity Zilla Cx - Cyclocross Bike with Disc Brakes - $699</div>
                    </div>
                </div>
            </div>
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