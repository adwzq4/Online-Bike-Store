<?php
include "connectionInfo.php";

$bike = $_REQUEST["bike"];

if ($_SESSION["currentUser"] == "") {
    if (array_key_exists($bike, $_SESSION["guestCart"])) {
        $_SESSION["guestCart"][$bike]++;
        echo "Successfully added to cart";
    }
    else {
        $_SESSION["guestCart"][$bike] = 1;
        echo "Successfully added to cart";
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

    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    finally {
        $conn = null;
    }
}
