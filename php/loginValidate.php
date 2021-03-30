<?php
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
            echo "<script type='text/javascript'>window.top.location='home.php';</script>";
            exit;
        }
        else {
            $loginErr = "Username and password do not match";
            $isValid = false;
        }
    }
}
?>
