<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "funeraria_agricultor";

    $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>