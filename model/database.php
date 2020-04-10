<?php

    // Heroku connection
    
    $dsn = 'mysql:host=u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=z5m57v1tc8e1ph0q';
    $username = 'i3t3dhhtdkjk51o7';
    $password = 'w4s9jn3zukeppir4';
   
    try {

        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
