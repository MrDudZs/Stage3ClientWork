<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['staffid'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if the document ID is provided
if (!isset($_GET['doc_id'])) {
    // Redirect to docs page if document ID is not provided
    header("Location: docs.php");
    exit;
}

// Retrieve document ID from URL
$doc_id = $_GET['doc_id'];

// Retrieve current user ID from session
$currentUserId = $_SESSION['staffid'];

// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if there is already a pending request for this document by the current user
$check_pending_query = "SELECT * FROM request_access WHERE doc_id = $doc_id AND staffid = $currentUserId AND status = 'Pending'";
$check_pending_result = $conn->query($check_pending_query);

if ($check_pending_result->num_rows > 0) {
    // Redirect to docs page if there is already a pending request
    header("Location: docs.php");
    exit;
}

// Insert a new access request into the database
$insert_query = "INSERT INTO request_access (doc_id, staffid, status) VALUES ($doc_id, $currentUserId, 'Pending')";
if ($conn->query($insert_query) === TRUE) {
    // Redirect to docs page after successful request
    header("Location: docs.php");
} else {
    // Redirect to docs page with error message if request fails
    header("Location: docs.php?error=access_request_failed");
}

// Close connection
$conn->close();
