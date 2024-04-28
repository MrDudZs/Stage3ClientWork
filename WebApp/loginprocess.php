<?php
session_start();

// Connection
include 'php/config.php';

//Check connection

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

// get form data
$staffid = $_POST['staffid'];
$provided_password = $_POST['password'];

// SQL Query checking user login
$sql = "SELECT staffid, first_name, surname, password, is_suspended, permission_id FROM staff WHERE staffid='$staffid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, fetch hashed password
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row['password'];
    $is_suspended = $row['is_suspended'];

    // Verify password
    if (password_verify($provided_password, $hashed_password_from_db)) {
        if ($is_suspended == 1) {
            // Account is suspended, redirect back to login page with error message
            $_SESSION['login_error'] = "Your account is suspended. Please contact support.";
            header("Location: login.php");
            exit;
        } else {
            // Login successful
            $_SESSION['staffid'] = $row['staffid'];
            $_SESSION['username'] = $row['first_name'] . ' ' . $row['surname'];
            $_SESSION['permission_id'] = $row['permission_id'];

            header("Location: dashboard.php");
            exit;
        }
    } else {
        // Invalid password
        $_SESSION['login_error'] = "Invalid email or user ID";
        header("Location: login.php");
        exit;
    }
} else {
    // User not found
    $_SESSION['login_error'] = "Invalid email or user ID";
    header("Location: login.php");
    exit;
}
