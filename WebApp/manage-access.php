<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['staffid'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && isset($_GET['doc_id'])) {
    // Handle the action (approve or decline)
    $action = $_GET['action'];
    $doc_id = $_GET['doc_id'];

    if ($action === 'approve') {
        // Handle approval logic
        approveRequest($doc_id);
    } elseif ($action === 'decline') {
        // Handle decline logic
        declineRequest($doc_id);
    }
}
// Function to approve a request
function approveRequest($doc_id)
{
    // Database connection
    include 'php/config.php';

    // Retrieve the staff ID of the current user from the session
    $currentstaffid = $_SESSION['staffid'];

    // Retrieve the staff ID of the requestor from the request_access table
    $getRequestorIdQuery = "SELECT staffid FROM request_access WHERE doc_id = $doc_id AND status = 'Pending'";
    $getRequestorIdResult = $conn->query($getRequestorIdQuery);

    if ($getRequestorIdResult->num_rows > 0) {
        $row = $getRequestorIdResult->fetch_assoc();
        $requestorStaffId = $row['staffid'];

        // Update the request status to 'Approved'
        $updateRequestQuery = "UPDATE request_access SET status = 'Approved' WHERE doc_id = $doc_id AND status = 'Pending'";
        if ($conn->query($updateRequestQuery) === TRUE) {
            // Insert requestor to document_access table
            $insertDocumentAccessQuery = "INSERT INTO document_access (doc_id, staff_id) VALUES ($doc_id, $requestorStaffId)";
            if ($conn->query($insertDocumentAccessQuery) === TRUE) {
                // Insert audit log entry
                $auditLogDescription = "Approved access for document ID: $doc_id";
                $insertAuditLogQuery = "INSERT INTO audit_log (staffid, doc_id, change_description) VALUES ($currentstaffid, $doc_id, '$auditLogDescription')";
                
                // Insert into audit log table
                if ($conn->query($insertAuditLogQuery) === TRUE) {
                    // Redirect back to dashboard with success message
                    header("Location: dashboard.php?success=access_approved");
                    exit;
                } else {
                    // Redirect back to dashboard with error message
                    header("Location: dashboard.php?error=audit_log_insert_failed");
                    exit;
                }
            } else {
                // Redirect back to dashboard with error message
                header("Location: dashboard.php?error=document_access_insert_failed");
                exit;
            }
        } else {
            // Redirect back to dashboard with error message
            header("Location: dashboard.php?error=request_approval_update_failed");
            exit;
        }
    } else {
        // Redirect back to dashboard with error message if requestor not found
        header("Location: dashboard.php?error=requestor_not_found");
        exit;
    }
}
// Function to decline a request
function declineRequest($doc_id)
{
    // Database connection
    include 'php/config.php';

    // Update the request status to 'Declined'
    $sql = "UPDATE request_access SET status = 'Declined' WHERE doc_id = $doc_id AND status = 'Pending'";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to dashboard with success message
        header("Location: dashboard.php");
        exit;
    } else {
        // Redirect back to dashboard with error message
        header("Location: dashboard.php");
        exit;
    }

    // Close connection
}
