<!DOCTYPE html>
<html lang="en">

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['staffid'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Include database connection
include 'php/config.php';

// Function to log actions
function logAction($action, $doc_id)
{
    global $conn;
    // Insert a record into the audit log table
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $staff_id = $_SESSION['staffid'] ?? ''; // Assuming staffid is the user ID
    $change_description = "Added user with staffid: $action for document ID $doc_id"; // Adjust as needed

    // SQL to insert into the audit_log table
    $sql = "INSERT INTO audit_log (date, time, staffid, doc_id, change_description) 
            VALUES ('$date', '$time', '$staff_id', '$doc_id', '$change_description')";

    // Execute the query
    $conn->query($sql);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $staffid = $_POST['staffid'] ?? '';

    // Validate form data (you may need additional validation)
    if (!empty($staffid)) {
        // Get doc_id from URL parameter
        $doc_id = $_GET['doc_id'] ?? '';

        // Log the action
        logAction($staffid, $doc_id);
    }
}

// Close connection
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document: Add User</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
</head>

<body>
    <div class="container-mn">
        <div class="navbar-cont-mn">
            <?php
            include "includes/nav.php";
            ?>
        </div>
        <div class="header-cont-mn">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="adduser-main">
            <div class="main-topleft">
                <input type="button" value="Return" onclick="window.location.href='user-files.php?doc_id='">
                <!-- https://stackoverflow.com/a/13511806 -->
            </div>
            <div class="adduser-form-con">
                <form method="post">
                    <label for="staffid">Shared Document Access:</label>
                    <input type="text" id="staffid" name="staffid" placeholder="Staff Id" required>
                    <button type="submit">Add User</button>
                </form>
                <?php
                // After successful form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Get form data
                    $staffid = $_POST['staffid'] ?? '';

                    // Validate form data (you may need additional validation)
                    if (!empty($staffid)) {
                        // Get doc_id from URL parameter
                        $doc_id = $_GET['doc_id'] ?? '';

                        // Insert a record into the document_access table
                        $sql = "INSERT INTO document_access (doc_id, staff_id) VALUES ('$doc_id', '$staffid')";
                        if ($conn->query($sql) === TRUE) {
                            // Log the action
                            logAction($staffid, $doc_id);
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>