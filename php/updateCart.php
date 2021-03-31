<?php
include "./connectionInfo.php";

$servername = "localhost";
$dbname = "mysql";
$username = "root";
$password = "";

$bike = $_REQUEST["bike"];
$quantity = $_REQUEST["quantity"];

if ($_SESSION["currentUser"] == "") {
    if ($quantity <= 0) {
        unset($_SESSION["guestCart"][$bike]);
    }
    else {
        $_SESSION["guestCart"][$bike] = $quantity;
    }
}
else {
    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($quantity <= 0) {
            $stmt = $conn->prepare("DELETE FROM carts WHERE itemID = :itemID");
            $stmt->bindParam(":itemID", $bike);
        }
        else {
            $stmt = $conn->prepare("UPDATE carts SET quantity = :quantity WHERE itemID = :itemID");
            $stmt->bindParam(":itemID", $bike);
            $stmt->bindParam(":quantity", $quantity);
        }

        $stmt->execute();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    finally {
        $conn = null;
    }
}