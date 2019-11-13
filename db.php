<?php

    $dbname = 'u800519350_LBuOL';
    $username = 'u800519350_gLpRH';
    $password = 'cs350fall19';
    $port = '3306';
    $host = "localhost:$port";
    
   
    try {
        $db_connect = "mysql:host=$host;dbname=$dbname";
        return new PDO($db_connect, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();

    }
    
    // Create a database connection
    //$db = bluehost_connect(); 

?>

