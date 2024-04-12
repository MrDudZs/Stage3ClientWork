<?php

// Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edrm_stage3";

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}
