<?php
    if ($isValid) {
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName,
            lastName, address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
            VALUES (:userName, :passWord, :firstName, :lastName, :address1, :address2, :city,
            :state, :zipCode, :phone, :email, :gender, :marital, :bday)");
            $sql->bindParam(':userName', $userName);
            $sql->bindParam(':passWord', $pwd);
            $sql->bindParam(':firstName', $firstName);
            $sql->bindParam(':lastName', $lastName);
            $sql->bindParam(':gender', $gender);
            $sql->bindParam(':marital', $marital);
            $sql->bindParam(':bday', $bday);
            $sql->bindParam(':address1', $address1);
            $sql->bindParam(':address2', $address2);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':state', $state);
            $sql->bindParam(':zipCode', $zip);
            $sql->bindParam(':phone', $phone);
            $sql->bindParam(':email', $email);

            $sql->execute();

            $last_id = $conn->lastInsertId();
            $_SESSION["last_id"] = "$last_id";

            echo "<script type='text/javascript'>window.top.location='confirmation.php';</script>";
            exit;
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        finally {
            $conn = null;
        }
    }