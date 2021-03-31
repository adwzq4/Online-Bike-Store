<?php
include "connectionInfo.php";

$bike = $_REQUEST["bike"];

if ($_SESSION["currentUser"] == "") {
    if (array_key_exists($bike, $_SESSION["guestCart"])) {
        $_SESSION["guestCart"][$bike]++;
        echo "Successfully added to guest cart";
    }
    else {
        $_SESSION["guestCart"][$bike] = 1;
        echo "Successfully added to guest cart";
    }
}
else {
    $servername = "localhost";
    $dbname = "mysql";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO carts (bike, quantity, userID)
            VALUES(:bike, 1, :userID)
            ON DUPLICATE KEY UPDATE
                quantity = quantity + 1;");

        $stmt->bindParam(':bike', $bike);
        $stmt->bindParam(':userID', $_SESSION["currentUser"]);

        $stmt->execute();
        echo "Successfully added to ".$_SESSION["firstName"]."'s cart";
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
    finally {
        $conn = null;
    }
}
