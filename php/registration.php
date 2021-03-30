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
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/registration.js"></script>
    <title>BikeSite - Registration</title>
</head>
<body id="registration-body">
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
            <li><a href="home.php">Home Page</a></li>
            <li><a href="displayCart.php">View Guest Cart</a></li>
            <li><a href="loginPage.php">Login</a></li>
            <li><a href="./registration.php">Registration</a></li>
        </ul>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content">
            <div class="transbox-wide">
                <h2>Register here!</h2>
                <h4>Sign up to hear about the latest deals, local bike events, and more!</h4>
            </div>
            <?php
            include 'inputValidate.php';
            ?>
            <form method="post" class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 transbox">
                        <div class="form-group" id="username">
                            <label for="username">Username:</label>
                            <input name="username" class="form-control" type="text" onblur="checkUsername(this); checkForms();" required
                                   value="<?php echo $userName; ?>"/>
                            <p id="username-feedback" class="feedback error">* <?php echo $userNameErr;?></p>
                        </div>
                        <div class="form-group" id="pwd">
                            <label for="pwd">Password:</label>
                            <input id="password-text" name="pwd" class="form-control" type="password" onblur="checkPwd(this); checkForms();" required
                                   value="<?php echo $pwd; ?>"/>
                            <p id="pwd-feedback" class="feedback error">* <?php echo $pwdErr;?></p>
                        </div>
                        <div class="form-group" id="repeat-pwd">
                            <label for="repeat-pwd">Repeat Password:</label>
                            <input name="repeat-pwd" class="form-control" type="password" onblur="checkRepeatPwd(this); checkForms();" required
                                   value="<?php echo $rptPwd; ?>"/>
                            <p id="repeat-pwd-feedback" class="feedback error">* <?php echo $rptPwdErr;?></p>
                        </div>
                        <div class="form-group" id="first-name">
                            <label for="first-name">First Name:</label>
                            <input name="first-name" class="form-control" type="text" onblur="checkFirstName(this); checkForms();" required
                                   value="<?php echo $firstName; ?>"/>
                            <p id="first-name-feedback" class="feedback error">* <?php echo $firstNameErr;?></p>
                        </div>
                        <div class="form-group" id="last-name">
                            <label for="last-name">Last Name:</label>
                            <input name="last-name" class="form-control" type="text" onblur="checkLastName(this); checkForms();" required
                                   value="<?php echo $lastName; ?>"/>
                            <p id="last-name-feedback" class="feedback error">* <?php echo $lastNameErr;?></p>
                        </div>
                        <div class="form-group" id="gender">
                            <label class="control-label" for="gender">Gender:</label>
                            <input name="gender" class="form-control" type="text" onblur="checkGender(this); checkForms();" required
                                   value="<?php echo $gender; ?>"/>
                            <p id="gender-feedback" class="feedback error">* <?php echo $genderErr;?></p>
                        </div>
                        <div class="form-group" id="marital-status">
                            <label for="marital-status">Marital Status:</label>
                            <input name="marital-status" class="form-control" type="text" onblur="checkMarital(this); checkForms();" required
                                   value="<?php echo $marital; ?>"/>
                            <p id="marital-feedback" class="feedback error">* <?php echo $maritalErr;?></p>
                        </div>
                        <div class="form-group" id="birthday">
                            <label for="birthday">Birthday:</label>
                            <input name="birthday" class="form-control" type="text" onblur="checkBirthday(this); checkForms();" required placeholder="mm/dd/yyyy"
                                   value="<?php echo $bday; ?>"/>
                            <p id="birthday-feedback" class="feedback error">* <?php echo $bdayErr;?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 transbox">
                        <div class="form-group" id="address-1">
                            <label for="address-1">Address:</label>
                            <input name="address-1" class="form-control" type="text" onblur="checkAddress(this); checkForms();" required
                                   value="<?php echo $address1; ?>"/>
                            <p id="address-1-feedback" class="feedback error">* <?php echo $address1Err;?></p>
                        </div>
                        <div class="form-group" id="address-2">
                            <label for="address-2">Address Line 2 (optional):</label>
                            <input name="address-2" class="form-control" type="text" onblur="checkAddress2(this); checkForms();"
                                   value="<?php echo $address2; ?>"/>
                            <p id="address-2-feedback" class="feedback error"><?php echo $address2Err;?></p>
                        </div>
                        <div class="form-group" id="city">
                            <label for="city">City:</label>
                            <input name="city" class="form-control" type="text" onblur="checkCity(this); checkForms();" required
                                   value="<?php echo $city; ?>"/>
                            <p id="city-feedback" class="feedback error">* <?php echo $cityErr;?></p>
                        </div>
                        <div class="form-group" id="state">
                            <label for="state">State:</label>
                            <input name="state" class="form-control" type="text" onblur="checkState(this); checkForms();" required
                                   value="<?php echo $state; ?>">
                            <p id="state-feedback" class="feedback error">* <?php echo $stateErr;?></p>
                        </div>
                        <div class="form-group" id="zip-code">
                            <label for=zip-code>Zip Code:</label>
                            <input name="zip-code" class="form-control" type="text" onblur="checkZip(this); checkForms();" required
                                   value="<?php echo $zip; ?>"/>
                            <p id="zip-feedback" class="feedback error">* <?php echo $zipErr;?></p>
                        </div>
                        <div class="form-group" id="phone">
                            <label for=phone>Phone Number:</label>
                            <input name="phone" class="form-control" type="text" placeholder="123-456-7890" onblur="checkPhone(this); checkForms();" required
                                   value="<?php echo $phone; ?>"/>
                            <p id="phone-feedback" class="feedback error">* <?php echo $phoneErr;?></p>
                        </div>
                        <div class="form-group" id="email">
                            <label for=email>Email Address:</label>
                            <input name="email" class="form-control" type="text" onblur="checkEmail(this); checkForms();" required
                                   value="<?php echo $email; ?>"/>
                            <p id="email-feedback" class="feedback error">* <?php echo $emailErr;?></p>
                        </div>
                        <button class="btn" onclick="resetForms();">Reset</button>
                        <input type="submit" id="submit" class="btn btn-success" value="Submit" disabled><br><br><br>
                        <p class="error">* indicates a required field.</p>
                    </div>
                </div>
            </form>
            <?php
            include 'insertValidData.php';
            ?>
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