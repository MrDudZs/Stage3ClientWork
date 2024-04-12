<?php
session_start();

// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}

// Retrieve first name, surname, and staffid from the session
$first_name = $_SESSION['first_name'] ?? '';
$surname = $_SESSION['surname'] ?? '';
$staffid = $_SESSION['staffid'] ?? ''; // Retrieve staffid from session

// File upload directory
$upload_dir = "uploads/";

// Get file details
$file_name = $_FILES['file']['name'];
$file_temp = $_FILES['file']['tmp_name'];
$file_type = $_FILES['file']['type'];

// Move uploaded file to the upload directory
move_uploaded_file($file_temp, $upload_dir . $file_name);

// Get other data
$doc_owner = $first_name . ' ' . $surname; // Concatenate first name and surname
$doc_severity = $_POST['doc_severity']; // Get severity from dropdown
$upload_date = date('Y-m-d'); // Get current date

// SQL Query to insert data into the uploaded_docs table, including staffid
$sql = "INSERT INTO uploaded_docs (doc_name, doc_owner, doc_severity, upload_date, staff_id) 
        VALUES ('$file_name', '$doc_owner', '$doc_severity', '$upload_date', '$staffid')";

if ($conn->query($sql) === TRUE) {
    echo "File uploaded successfully";
    header("Location: admin.php");
    // Redirect or display success message as needed
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();