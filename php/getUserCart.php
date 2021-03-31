<?php
$servername = "localhost";
$dbname = "mysql";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT itemID, bike, quantity FROM carts WHERE userID = :userID;");
    $stmt->bindParam(':userID', $_SESSION["currentUser"]);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $cart = $stmt->fetchAll();
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
finally {
    $conn = null;
}