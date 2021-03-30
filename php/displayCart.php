<!DOCTYPE html>
<?php
include 'connectionInfo.php';
$json = file_get_contents("./bikeData.json");
$bikeData = json_decode($json, true);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>BikeSite - View Cart</title>
</head>
<body id="home-body">
<header class="header">
    <div class="container fluid">
        <img id="logo" src="../img/logo.jpg" height="100" width="130" alt="BikeSite logo - BS"/>
        <div id="header-animation">
            <video width="160" height="120" autoplay loop muted playsinline>
                <source src="../img/bike_silhuoette.webm" type="video/webm">
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
                <li><a href="home.php">Home Page</a></li>
                <li><a href="./displayCart.php">View Your Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else :?>
                <li><a href="home.php">Home Page</a></li>
                <li><a href="./displayCart.php">View Guest Cart</a></li>
                <li><a href="loginPage.php">Login</a></li>
                <li><a href="registration.php">Register</a></li>
            <?php endif; ?>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox-wide">
                <?php if($_SESSION["currentUser"] !== "") :?>
                <h2>Your Cart</h2><br><br>
                <table class="table">
                    <?php

                    ?>
                </table>
                <?php else :?>
                <h2>Guest Cart</h2><br><br>
                <table class="table">
                    <?php
                    if (count($_SESSION["guestCart"])) :
                        $total = 0;
                        foreach($_SESSION["guestCart"] as $bike => $quantity) {
                            $total += $bikeData[$bike]["price"] * $quantity;
                            echo "<tr class='tr' id='$bike'>
                            <td class='td'>
                            <a target='_blank' href='img/" . $bikeData[$bike]["path"] . ".jpg'>
                                <img src='img/" . $bikeData[$bike]["path"] . ".jpg' height='90' width='150' alt='" . $bikeData[$bike]["alt"] . "'/></a>
                            </td>
                            <td class='td'>
                            " . $bikeData[$bike]["name"] . "
                            </td>
                            <td class='td' id='$bike-quantity'>
                            Quantity: $quantity
                            </td>
                        </tr>";
                        }
                        echo "<tr class='tr'>
                        <td class='td total-price' id='total-price'>Cart total: $$total.00</td>
                        </tr>";
                    else :
                        echo "The cart is empty";
                    endif;
                    ?>
                </table>
                <?php endif; ?>
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
