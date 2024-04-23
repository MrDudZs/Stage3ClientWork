<?php
session_start();
include 'php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $job_role = isset($_POST['job_role']) ? $_POST['job_role'] : ""; 
    $permission_id = isset($_POST['permission_id']) ? $_POST['permission_id'] : ""; 
    $department_id = isset($_POST['department_id']) ? $_POST['department_id'] : ""; 

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Set is_suspended to false
    $is_suspended = false;

    $sql = "INSERT INTO staff (first_name, surname, email, dob, password, is_suspended, job_role, permission_id, department_id) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssiisi", $first_name, $surname, $email, $dob, $hashed_password, $is_suspended, $job_role, $permission_id, $department_id);
    
    if ($stmt->execute()) {
        echo "User registered successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}