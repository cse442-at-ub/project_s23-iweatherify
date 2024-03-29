<?php 
    require_once '../loadenv.php';

    $dbhost = getenv('DB_HOST');
    $dbuser = getenv('DB_USER');
    $dbpass = getenv('DB_PASS');
    $dbname = getenv('DB_NAME');
    
    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_error);
    }
?>