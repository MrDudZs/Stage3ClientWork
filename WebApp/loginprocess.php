<?php
use LDAP\Result;
session_start();

// Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edrm_stage3";

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}

// retreive form data
$email = $_POST['email'];
$staffid = $_POST['staffid'];
$password = $_POST['password'];

// SQL Query checking staff login
$sql = "SELECT id FROM staff WHERE email='$email' AND staffid='$staffid' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1){
    //Login successful
    echo "Login Successful!";
    header("Location: dashboard.php");
    exit;

} else {
    // Login failed
    echo "Invalid email, staffID, or password";
    header("Location: login.php");
    exit;
}

$conn->close();

?>