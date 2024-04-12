<?php

session_start();

// Connection
include 'php/config.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$job_role = isset($_POST['job_role']) ? $_POST['job_role'] : ""; // Check if job_role is set
$permission_id = isset($_POST['permission_id']) ? $_POST['permission_id'] : ""; // Check if permission_id is set


// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Set is_suspended to false
$is_suspended = false;

// SQL query to insert user into the database
$sql = "INSERT INTO staff (first_name, surname, email, dob, password, is_suspended, job_role, permission_id) VALUES ('$first_name', '$surname', '$email', '$dob', '$hashed_password', '$is_suspended', '$job_role', '$permission_id')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
