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

    // function ErrorSubmit() {
    //     if (isset($_POST['button'])) {
    //         if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    //             $HERE = "
    //                 <div id='NOTIFICATIONERR'; class='error'; style='color: #ffffff; background-color: #f62459; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 2px; font-size: 16px; display: flex; justify-content: space-between; align-items: center;'>
    //                     Your message hasn't been sent!
    //                     <svg id='CLOSE' width='14px' height='14px' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='times' class='svg-inline--fa fa-times fa-w-11' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 352 512'>
    //                         <path fill='currentColor' d='M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z'></path>
    //                     </svg>
    //                 </div>";
    //             echo "$HERE";
    //             echo "<script>console.log('Submit Successful')</script>";
    //         }
    //     }
    // }
    //
    // function successfullSubmit() {
    //     if (isset($_POST['button'])) {
    //         if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    //             $HERE = "
    //                 <div id='NOTIFICATION'; class='success'; style='color: #ffffff; background-color: #2ecc71; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 2px; font-size: 16px; display: flex; justify-content: space-between; align-items: center;'>
    //                     Your message has been sent!
    //                     <svg id='CLOSE' width='14px' height='14px' aria-hidden='true' focusable='false' data-prefix='fas' data-icon='times' class='svg-inline--fa fa-times fa-w-11' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 352 512'>
    //                         <path fill='currentColor' d='M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z'></path>
    //                     </svg>
    //                 </div>";
    //             echo "$HERE";
    //             echo "<script>console.log('Submit Successful')</script>";
    //         }
    //     }
    // }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['Email'];
        if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $email)) {

            // Create prepared statement
            $sql = "INSERT INTO `enquiry`.`email` (`name`, `email`, `phone`, `subject`, `message`, `marketing`)
            VALUES (:name, :email, :01234567891, :subject, :message, :0)";

            $stmt = $PDOEnquiries->prepare($sql);

            // Bind parameters to statement
            $stmt->bindParam(':name', $_REQUEST['fullName'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':01234567891', $_REQUEST['phoneNumber'], PDO::PARAM_INT);
            $stmt->bindParam(':subject', $_REQUEST['subject'], PDO::PARAM_STR);
            $stmt->bindParam(':message', $_REQUEST['message'], PDO::PARAM_STR);
            $stmt->bindParam(':0', $_REQUEST['marketing'], PDO::PARAM_BOOL);

            // Execute the prepared statement
            $stmt->execute();
            $SUBMIT = 1;
        } else {
            $SUBMIT = 2;
            // header('Location:/Netmatters/contact-us.php');
            // exit();
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
