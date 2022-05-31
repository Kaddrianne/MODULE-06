<?php
    $mysqli = new mysqli("localhost","root","","test");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "CREATE DATABASE CPE3";
    if ($mysqli->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $mysqli -> close();
?>