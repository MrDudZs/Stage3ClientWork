<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docId = $_POST['doc_id'];
    $approvalStatus = $_POST['approval_status'];

    if ($approvalStatus === 'pending') {
        echo "No action taken for 'Pending'";
        header("Location: admin.php");
        exit;
    }

    // Check if the approval status is set and valid
    if (isset($_POST['approval_status']) && ($_POST['approval_status'] == 'approved' || $_POST['approval_status'] == 'declined')) {
        // Get the selected approval status
        $approval_status = $_POST['approval_status'];

        // Database connection
        include 'php/config.php';

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Update file_status based on the selected approval status for the specific document
        $new_file_status = ($approval_status == 'approved') ? 1 : 2;

        // Get the current timestamp
        $approval_timestamp = date('Y-m-d H:i:s');

        // SQL query to update file_status and approval_timestamp in uploaded_docs table for the specific document
        $sql = "UPDATE uploaded_docs SET file_status = '$new_file_status', approval_timestamp = '$approval_timestamp' WHERE doc_id = '$docId'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully.";
            header("Location: admin.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close connection
        $conn->close();
    } else {
        echo "Invalid approval status.";
    }
}
