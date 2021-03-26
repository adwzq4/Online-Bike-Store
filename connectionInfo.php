<?php
    $sesh = session_status();
    session_start();

    $servername = "localhost";
    $dbname = "mysql";
    $username = "root";
    $password = "";

    if (!array_key_exists("currentUser", $_SESSION)) :
        $_SESSION["currentUser"] = "";
        $_SESSION["firstName"] = "";
        $_SESSION["lastName"] = "";
    endif;
?>
