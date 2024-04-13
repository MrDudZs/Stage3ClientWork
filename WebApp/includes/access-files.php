<?php
session_start();
include '../php/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docId = $_POST['doc_id'];

    // Query the database to get file details
    $sql = "SELECT * FROM uploaded_docs WHERE doc_id = '$docId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // File found, perform actions (such as granting access or redirecting)
        echo "File accessed successfully!";
        // Optionally, you can perform additional actions here, such as logging the access or updating the database
    } else {
        // File not found, handle error
        echo "File not found.";
    }
}
