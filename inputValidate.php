<?php
    $userNameErr = $pwdErr = $rptPwdErr = $firstNameErr = $lastNameErr = $emailErr
        = $genderErr = $maritalErr = $bdayErr = $address1Err = $address2Err = $cityErr
        = $stateErr = $zipErr = $phoneErr = "";
    $userName = $pwd = $rptPwd = $firstName = $lastName = $email
        = $gender = $marital = $bday = $address1 = $address2 = $city
        = $state = $zip = $phone = "";
    $isValid = false;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $isValid = true;

        $userName = clean_input($_POST["username"]);
        if (empty($userName)) {
            $userNameErr = "Username is required";
            $isValid = false;
        }
        elseif (strlen($userName) > 50) {
            $userNameErr = "Exceeded character limit (6-50)";
            $isValid = false;
        }
        else {
            if (strlen($userName) < 6) {
                $userNameErr = "Too few characters (6-50)";
                $isValid = false;
            }
        }

        $pwd = clean_input($_POST["pwd"]);
        if (empty($pwd)) {
            $pwdErr = "Password is required";
            $isValid = false;
        }
        elseif (strlen($pwd) > 50) {
            $pwdErr = "Exceeded character limit (8-50)";
            $isValid = false;
        }
        elseif (!(preg_match("/[A-Z]/", $pwd) && preg_match("/[a-z]/", $pwd) && preg_match("/[0-9]/", $pwd)
            && preg_match("/\W|_/", $pwd))) {
            $pwdErr = "Password must have at least one of each: capital letter, lowercase letter, number, and special character.";
            $isValid = false;
        }
        else {
            if (strlen($pwd) < 8) {
                $pwdErr = "Too few characters (8-50)";
                $isValid = false;
            }
        }

        $rptPwd = clean_input($_POST["repeat-pwd"]);
        if (empty($rptPwd)) {
            $rptPwdErr = "Must repeat password.";
            $isValid = false;
        }
        elseif ($pwd != $rptPwd) {
            $rptPwdErr = "Passwords don't match.";
            $isValid = false;
        }
        elseif (strlen($rptPwd) > 50) {
            $rptPwdErr = "Exceeded character limit (8-50)";
            $isValid = false;
        }
        elseif (!(preg_match("/[A-Z]/", $rptPwd) && preg_match("/[a-z]/", $rptPwd) && preg_match("/[0-9]/", $rptPwd)
            && preg_match("/\W|_/", $rptPwd))) {
            $rptPwdErr = "Password must have at least one of each: capital letter, lowercase letter, number, and special character.";
            $isValid = false;
        }
        else {
            if (strlen($rptPwd) < 8) {
                $rptPwdErr = "Too few characters (8-50)";
                $isValid = false;
            }
        }

        $firstName = clean_input($_POST["first-name"]);
        if (empty($firstName)) {
            $firstNameErr = "First name is required";
            $isValid = false;
        }
        elseif (strlen($firstName) > 50) {
            $firstNameErr = "Exceeded character limit (50)";
            $isValid = false;
        }
        else {
            if (!preg_match("/^[a-zA-Z]+$/", $firstName)) {
                $firstNameErr = "Only letters allowed";
                $isValid = false;
            }
        }

        $lastName = clean_input($_POST["last-name"]);
        if (empty($lastName)) {
            $lastNameErr = "Last name is required";
            $isValid = false;
        }
        elseif (strlen($lastName) > 50) {
            $lastNameErr = "Exceeded character limit (50)";
            $isValid = false;
        }
        else {
            if (!preg_match("/^[a-zA-Z]+$/", $lastName)) {
                $lastNameErr = "Only letters allowed";
                $isValid = false;
            }
        }

        $email = clean_input($_POST["email"]);
        if (empty($email)) {
            $emailErr = "Email is required";
            $isValid = false;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $isValid = false;
            }
        }

        $gender = clean_input($_POST["gender"]);
        if (empty($gender)) {
            $genderErr = "Gender is required";
            $isValid = false;
        }
        if (strlen($gender) > 50) {
            $genderErr = "Exceeded character limit (50)";
            $isValid = false;
        }

        $marital = clean_input($_POST["marital-status"]);
        if (empty($marital)) {
            $maritalErr = "Marital status is required";
            $isValid = false;
        }
        if (strlen($marital) > 50) {
            $maritalErr = "Exceeded character limit (50)";
            $isValid = false;
        }

        $address1 = clean_input($_POST["address-1"]);
        if (empty($address1)) {
            $address1Err = "Address is required";
            $isValid = false;
        }
        if (strlen($address1) > 100) {
            $address1Err = "Exceeded character limit (100)";
            $isValid = false;
        }

        $address2 = clean_input($_POST["address-2"]);
        if (strlen($address2) > 100) {
            $address2Err = "Exceeded character limit (100)";
            $isValid = false;
        }

        $city = clean_input($_POST["city"]);
        if (empty($city)) {
            $cityErr = "City is required";
            $isValid = false;
        }
        if (strlen($city) > 50) {
            $cityErr = "Exceeded character limit (50)";
            $isValid = false;
        }

        $state = clean_input($_POST["state"]);
        if (empty($state)) {
            $stateErr = "State is required";
            $isValid = false;
        }
        if (strlen($state) > 52) {
            $stateErr = "Exceeded character limit (52)";
            $isValid = false;
        }

        $bday = clean_input($_POST["birthday"]);
        if (empty($bday)) {
            $bdayErr = "Birthday is required";
            $isValid = false;
        }
        else {
            if (!preg_match("/^[0-1][0-9]\/[0-3][0-9]\/[1-2][0-9][0-9][0-9]$/", $bday)) {
                $bdayErr = "Birthday must be in mm/dd/yyy format";
                $isValid = false;
            }
        }

        $zip = clean_input($_POST["zip-code"]);
        if (empty($zip)) {
            $zipErr = "Zip code is required";
            $isValid = false;
        }
        else {
            if (!preg_match("/^[0-9][0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]$/", $zip) && !preg_match("/^[0-9][0-9][0-9][0-9][0-9]$/", $zip)) {
                $zipErr = "Zip code must be in xxxxx or xxxxx-xxxx format";
                $isValid = false;
            }
        }

        $phone = clean_input($_POST["phone"]);
        if (empty($phone)) {
            $phoneErr = "Zip code is required";
            $isValid = false;
        }
        else {
            if (!preg_match("/^[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]$/", $phone)) {
                $phoneErr = "Phone number must be in xxx-xxx-xxxx format";
                $isValid = false;
            }
        }
    }

    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>