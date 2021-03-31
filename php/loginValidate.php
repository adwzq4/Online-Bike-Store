<?php
$servername = "localhost";
$dbname = "mysql";
$username = "root";
$password = "";
$loginUser = $loginPwd = $loginErr = "";
$assocArray = [];
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;
    $loginUser = trim($_POST["loginUser"]);
    $loginPwd = trim($_POST["loginPwd"]);

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, userName, firstName, lastName, password FROM registration WHERE userName = :user");
        $stmt->bindParam(':user', $loginUser);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $assocArray = $stmt->fetchAll();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
    finally {
        $conn = null;
    }

    if (empty($assocArray)) {
        $loginErr = "Username does not exist";
        $isValid = false;
    }
    else {
        if ($assocArray[0]["password"] === $loginPwd) {
            $_SESSION["currentUser"] = $assocArray[0]["id"];
            $_SESSION["firstName"] = $assocArray[0]["firstName"];
            $_SESSION["lastName"] = $assocArray[0]["lastName"];

            if (count($_SESSION["guestCart"])) {
                try {
                    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    foreach ($_SESSION["guestCart"] as $bike=>$quantity) {
                        $stmt = $conn->prepare("INSERT INTO carts (bike, quantity, userID)
                        VALUES(:bike, :quantity, :userID)
                        ON DUPLICATE KEY UPDATE
                            quantity = quantity + :quantity;");

                        $stmt->bindParam(':bike', $bike);
                        $stmt->bindParam(':quantity', $quantity);
                        $stmt->bindParam(':userID', $_SESSION["currentUser"]);
                        $stmt->execute();
                    }
                }
                catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                    exit;
                }
                finally {
                    $conn = null;
                }

                $_SESSION["guestCart"] = [];
            }

            echo "<script type='text/javascript'>window.top.location='home.php';</script>";
            exit;
        }
        else {
            $loginErr = "Username and password do not match";
            $isValid = false;
        }
    }
}