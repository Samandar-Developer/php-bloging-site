<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "username");
    define("DB_PASS", "password");
    define("DB_NAME", "database_name");

    //Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if ($conn->connect_errno) {
        die("Connection Failed" . $conn->connect_errno);
    }
    
