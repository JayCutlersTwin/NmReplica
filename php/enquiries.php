<?php

//CREATE PDO
try {
    $PDOEnquiries = new PDO("mysql:host=localhost;", "root", "");
    $PDOEnquiries->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("Connected to PDO"); </script>';
} catch (PDOException $e) {
    die("ERROR: Could not connect to database. " . $e->getMessage());
}

//CREATE DATABASE
try {
    $sql = "CREATE DATABASE IF NOT EXISTS enquiry";
    $PDOEnquiries->exec($sql);
    echo '<script>console.log("Database has been Created"); </script>';
} catch (PDOException $e) {
    die("ERROR: Could not create to database. " . $e->getMessage());
}

//CREATE TABLE
try {
    $sql = "CREATE TABLE IF NOT EXISTS `enquiry`.`email` (
        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `name` VARCHAR(50),
        `email` VARCHAR(75),
        `phone` VARCHAR(11),
        `subject` VARCHAR(50),
        `message` VARCHAR(255),
        `marketing` BOOLEAN default 0
    )";
    $PDOEnquiries->exec($sql);
    echo '<script>console.log("Table has been created"); </script>';
} catch (PDOException $e) {
    die("ERROR: Could not create to $sql. " . $e->getMessage());
}

// RETRIEVE DATA INSERT INTO Database
try {
    $SUBMIT = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['fullName'];
        $email = $_POST['Email'];
        $phone = $_POST['phoneNumber'];
        $marketing = '';

        if (!isset($_POST['marketing'])) {
            $marketing = 0;
        } else {
            $marketing = 1;
        }


        if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $email)) {
            if (preg_match('/^[0-9]{5,15}$/', $phone)) {

                // Create prepared statement
                $sql = "INSERT INTO `enquiry`.`email` (`name`, `email`, `phone`, `subject`, `message`, `marketing`)
                VALUES (:name, :email, :01234567891, :subject, :message, :0)";

                $stmt = $PDOEnquiries->prepare($sql);

                // Bind parameters to statement
                $stmt->bindParam(':name', $_REQUEST['fullName'], PDO::PARAM_STR);
                $stmt->bindParam(':email', $_REQUEST['Email'], PDO::PARAM_STR);
                $stmt->bindParam(':01234567891', $_REQUEST['phoneNumber'], PDO::PARAM_INT);
                $stmt->bindParam(':subject', $_REQUEST['subject'], PDO::PARAM_STR);
                $stmt->bindParam(':message', $_REQUEST['message'], PDO::PARAM_STR);
                $stmt->bindParam(':0', $marketing, PDO::PARAM_BOOL);

                // Execute the prepared statement
                $stmt->execute();
                $SUBMIT = 1;
            } else {
                $SUBMIT = 3;
            }
        } else {
            $SUBMIT = 2;
        }
    }

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // Delete NULL queries
    $sql = "DELETE FROM `enquiry`.`email` WHERE `name` IS NULL AND `email` IS NULL";
    $PDOEnquiries->exec($sql);
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


?>






<?php
