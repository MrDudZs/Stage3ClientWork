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
$username = $_SESSION['username'] ?? ''; // Retrieve username from session

// File upload directory
$upload_dir = "uploads/";

// Get file details
$file_name = $_FILES['file']['name'];
$file_temp = $_FILES['file']['tmp_name'];
$file_type = $_FILES['file']['type'];

// Move uploaded file to the upload directory
move_uploaded_file($file_temp, $upload_dir . $file_name);

// Get other data
$doc_owner = $username !== '' ? $username : $first_name . ' ' . $surname; // Assign username if available, otherwise use first name and surname
$doc_severity = $_POST['doc_severity']; // Get severity from dropdown
$upload_date = date('Y-m-d'); // Get current date
$upload_time = date('H:i:s'); // Get current time
$doc_class = $_POST['class']; // Get document class
$doc_due = $_POST['doc_due']; // Get document due date

// SQL Query to insert data into the uploaded_docs table
$sql = "INSERT INTO uploaded_docs (doc_name, doc_owner, doc_severity, upload_date, upload_time, staff_id, doc_class, doc_due) 
        VALUES ('$file_name', '$doc_owner', '$doc_severity', '$upload_date', '$upload_time', '$staffid', '$doc_class', '$doc_due')";

if ($conn->query($sql) === TRUE) {
    // Insert audit log entry
    $auditLogDescription = "Uploaded document: $file_name";
    $insertAuditLogQuery = "INSERT INTO audit_log (staffid, doc_id, date, time, change_description) VALUES ('$staffid', LAST_INSERT_ID(), '$upload_date', '$upload_time', '$auditLogDescription')";
    if ($conn->query($insertAuditLogQuery) === TRUE) {
        echo "File uploaded successfully";
        header("Location: dashboard.php");
        // Redirect or display success message as needed
    } else {
        echo "Error inserting audit log: " . $conn->error;
    }
} else {
    echo "Error uploading file: " . $conn->error;
}

// Close connection
$conn->close();
