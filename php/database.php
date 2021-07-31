<?php

//connect to the PDO
try {
    $PDO = new PDO("mysql:host=localhost;", "root", "");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("Connected to PDO"); </script>';
} catch (PDOException $e) {
    die("ERROR: Could not connect to database. " . $e->getMessage());
}

// Create the database
try{
    $mydb = "CREATE DATABASE IF NOT EXISTS netmatters";
    $PDO->exec($mydb);
    echo '<script>console.log("Database has been Created"); </script>';
} catch(PDOException $e){
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

// Create the tables
try {
    $mydb = "CREATE TABLE IF NOT EXISTS `netmatters`.`persons` (
        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `first_name` VARCHAR(30) NOT NULL,
        `last_name` VARCHAR(30) NOT NULL,
        `user_image_path` VARCHAR(250) NOT NULL
    )";
    $PDO->exec($mydb);
    echo "<script>console.log('users table has been created'); </script>";
} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = 'CREATE TABLE IF NOT EXISTS `netmatters`.`news` (
        `user_id` INT NOT NULL,
        `topic` VARCHAR(30) NOT NULL,
        `heading` VARCHAR(60) NOT NULL,
        `description` VARCHAR(250) NOT NULL,
        `news_date` DATE NOT NULL,
        `news_image_path` VARCHAR(250) NOT NULL,
        FOREIGN KEY (`user_id`) REFERENCES `netmatters`.`persons` (`id`)
    )';
    $PDO->exec($mydb);
    echo '<script>console.log("news table has been created"); </script>';
} catch (PDOException $e) {
    die("ERROR: Was Not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = "INSERT `netmatters`.`persons` (first_name, last_name, user_image_path) VALUES
    ('James', 'Gulliver', 'user3.jpeg'),
    ('Netmatters', 'Ltd', 'user2.png'),
    ('Tom', 'Lancaster', 'user1.jpeg')";
    $PDO->exec($mydb);
} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = "INSERT IGNORE INTO `netmatters`.`news` (user_id, topic, heading, description, news_date, news_image_path) VALUES
    ('1', 'news', 'Drowning in Spreadsheets? A business system m...', 'If like many business owners you find yourself creating large numbers of spreadsheets to keep...', '2021-04-20', 'cardTop3.jpeg'),
    ('2', 'news', 'Rob Becomes a Netmatters Director', 'Netmatters is constantly evolving and day-by-day it continues to grow in every aspect. Despit...', '2021-04-21', 'cardTop2.jpeg'),
    ('3', 'careers', 'Web Project Manager', 'Salary Ra...', '2021-04-23', 'cardTop1.jpeg')";
    $PDO->exec($mydb);
} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = "SELECT DISTINCT CONCAT(first_name, ' ', last_name) AS Name,
    topic,
    DATE_FORMAT(news_date, '%D %M %Y') AS Date,
    news_image_path,
    user_image_path,
    heading,
    description
    FROM `netmatters`.`persons` AS P
    LEFT OUTER JOIN `netmatters`.`news`AS N
    ON P.id = N.user_id
    WHERE news_date IS NOT NULL
    ORDER BY N.news_date DESC
    LIMIT 1";

    $results1 = $PDO->query($mydb);
    if($results1->rowCount() > 0){

        echo '<section class="news">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4 card1">
                        <div class="card" >
                            <div class="card-img-top">
                                <a href="#" class="side-banner" id="side-banner1">
                                    ';
                                        while ($row = $results1->fetch()) {
                                            echo $row["topic"];
                                    echo '
                                </a>
                                <a href="#">
                                    <img class="card-img-top pic" src="images/';
                                        echo $row["news_image_path"];

                                    echo '" alt="Card image cap">
                                </a>
                            </div>

                            <div class="card-body">

                                <div class="card-heading">
                                    <a href="#"><h5 class="card-title">';
                                    echo $row['heading'];
                                    echo '</h5></a>
                                </div>
                                <div class="card-paragraph">
                                    <p class="card-text">';
                                    echo $row['description'];
                                    echo '</p>
                                </div>

                                <a href="#" class="card-btn" id="button1">Read More</a>

                                <div class="createdby">
                                    <img src="icons/';
                                    echo $row["user_image_path"];
                                    echo '" alt="User icon" class="user-icon">
                                    <p class="author">
                                        <strong>Posted by ';
                                        echo $row["Name"];
                                        echo '</strong><br>';
                                        echo $row["Date"];
                                    }
                                    echo '</p>
                                </div>
                            </div>
                        </div>
                    </div>';
    }

} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = "SELECT DISTINCT CONCAT(first_name, ' ', last_name) AS Name,
    topic,
    DATE_FORMAT(news_date, '%D %M %Y') AS Date,
    news_image_path,
    user_image_path,
    heading,
    description
    FROM `netmatters`.`persons` AS P
    LEFT OUTER JOIN `netmatters`.`news`AS N
    ON P.id = N.user_id
    WHERE news_date IS NOT NULL
    ORDER BY N.news_date DESC
    LIMIT 1
    OFFSET 1";

    $results2 = $PDO->query($mydb);
    if($results2->rowCount() > 0){
        echo '<div class="col-lg-4 card2">
            <div class="card">

                <div class="card-img-top">
                    <a href="#">
                        <img class="card-img-top pic" src="images/';
                            while ($row2 = $results2->fetch()) {
                                echo $row2['news_image_path'];

                        echo '" alt="Card image cap">
                    </a>
                    <a href="#" class="side-banner" id="side-banner2">';
                        echo $row2['topic'];
                    echo '</a>
                </div>

                <div class="card-body">

                    <div class="card-heading">
                        <a href="#"><h5 class="card-title" id="card-title2">';
                        echo $row2['heading'];
                        echo '</h5></a>
                    </div>
                    <div class="card-paragraph">
                        <p class="card-text">';
                        echo $row2['description'];
                        echo '</p>
                    </div>

                    <a href="#" class="card-btn" id="button2">Read More</a>

                    <div class="createdby">
                        <img src="icons/';
                        echo $row2["user_image_path"];
                        echo'" alt="User icon" class="user-icon">
                        <p class="author">
                            <strong>Posted by ';
                            echo $row2["Name"];
                            echo '</strong><br>';
                            echo $row2["Date"];
                        }
                        echo '</p>
                    </div>
                </div>
            </div>
        </div>';
    }


} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

try {
    $mydb = "SELECT DISTINCT CONCAT(first_name, ' ', last_name) AS Name,
    topic,
    DATE_FORMAT(news_date, '%D %M %Y') AS Date,
    news_image_path,
    user_image_path,
    heading,
    description
    FROM `netmatters`.`persons` AS P
    LEFT OUTER JOIN `netmatters`.`news`AS N
    ON P.id = N.user_id
    WHERE news_date IS NOT NULL
    ORDER BY N.news_date DESC
    LIMIT 1
    OFFSET 2";

    $results3 = $PDO->query($mydb);
    if($results3->rowCount() > 0){
        echo '<div id="card3" class="col-lg-4 card3">
            <div class="card">

                <div class="card-img-top">
                    <a href="#">
                        <img class="card-img-top pic" src="images/';
                        while ($row3 = $results3->fetch()) {
                            echo $row3['news_image_path'];
                        echo '" alt="Card image cap">
                    </a>
                    <a href="#" class="side-banner" id="side-banner3">';
                        echo $row3["topic"];
                    echo '</a>
                </div>

                <div class="card-body">

                    <div class="card-heading">
                        <a href="#"><h5 class="card-title">';
                        echo $row3['heading'];
                        echo '</h5></a>
                    </div>
                    <div class="card-paragraph">
                        <p class="card-text">';
                        echo $row3['description'];
                        echo'</p>
                    </div>

                    <a href="#" class="card-btn" id="button3">Read More</a>

                    <div class="createdby">
                        <img src="icons/';
                            echo $row3['user_image_path'];
                        echo '" alt="User icon" class="user-icon">
                        <p class="author">
                            <strong>Posted by ';
                                echo $row3['Name'];
                            echo '</strong><br>';
                            echo $row3['Date'];
                        }
                        echo '</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>';
    }
} catch (PDOException $e) {
    die("ERROR: Was not able to execute $mydb. " . $e->getMessage());
}

//Close Connection
unset($PDO)

?>
