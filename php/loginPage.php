<!DOCTYPE html>
<?php
include 'connectionInfo.php';
$loginUser = $loginErr = $loginPwd = "";
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
    <script src="../js/login.js"></script>
    <title>BikeSite - Login</title>
</head>
<body>
<header class="header">
    <div class="container fluid">
        <img id="logo" src="../img/logo.jpg" height="105" width="130" alt="BikeSite logo - BS"/>
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
            <li><a href="home.php">Home Page</a></li>
            <li><a href="displayCart.php">View Guest Cart</a></li>
            <li><a href="./loginPage.php">Login</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
        <?php
        include 'loginValidate.php';
        ?>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox">
                <form method="post" class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group" id="loginUser">
                        <label for="loginUser">Username:
                            <input name="loginUser" class="form-control" type="text" required
                                   onblur="checkForms();" value="<?php echo $loginUser; ?>"/>
                        </label>
                    </div>
                    <div class="form-group" id="loginPwd">
                        <label for="loginPwd">Password:
                            <input name="loginPwd" class="form-control" type="password" required
                                   onblur="checkForms();" value="<?php echo $loginPwd; ?>"/>
                        </label>
                    </div>
                    <input type="submit" id="loginSubmit" class="btn btn-success" value="Submit" disabled><br><br>
                    <p id="login-feedback" class="feedback error"><?php echo $loginErr;?></p>
                </form>
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