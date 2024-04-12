<?php
session_start();
include '../php/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docId = $_POST['doc_id'];

    // SQL query to delete the file from the database
    $sql = "DELETE FROM uploaded_docs WHERE doc_id = '$docId'";
    if ($conn->query($sql) === TRUE) {
        echo "File deleted successfully";
    } else {
        echo "Error deleting file: " . $conn->error;
    }
}
