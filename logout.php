<?php
    session_start();
    $_SESSION["currentUser"] = "";
    $_SESSION["firstName"] = "";
    $_SESSION["lastName"] = "";
    echo "<script type='text/javascript'>window.top.location='home.php';</script>";
    exit;
?>