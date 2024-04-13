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

// Retrieve the doc_id from the URL parameter
$doc_id = $_GET['doc_id'] ?? '';

// Retrieve the selected document from the database
$sql = "SELECT * FROM uploaded_docs WHERE doc_id = '$doc_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // Fetch the document details

// Log action when user accesses the page
if (isset($_GET['action'])) {
    logAction($_GET['action']);
}

// Function to log actions
function logAction($action)
{
    global $conn;
    // Insert a record into the audit log table
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $username = $_SESSION['username'] ?? ''; // Assuming username is the user ID
    $change_description = "Clicked $action for document ID {$_GET['doc_id']}"; // Adjust as needed

    // SQL to insert into the audit_log table
    $sql = "INSERT INTO audit_log (date, time, staffid, change_description) 
            VALUES ('$date', '$time', '$username', '$change_description')";

    // Execute the query
    $conn->query($sql);
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Files</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
</head>

<body>
    <div class="container-mn">
        <div class="navbar-cont-mn">
            <?php include "includes/nav.php"; ?>
        </div>
        <div class="header-cont-mn">
            <?php include "includes/header.php"; ?>
        </div>
        <div class="filemod-cont">
            <div class="silemod-cont-top">
                <h1>User Files</h1>
                <table>
                    <tr>
                        <th>File Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    if ($row) {
                        echo "<tr>";
                        echo "<td>" . $row["doc_name"] . "</td>";
                        echo "<td>";
                        echo "<a href='user-files.php?doc_id=" . $row['doc_id'] . "&action=modify' class='action-link'>Modify</a>";
                        echo "<a href='user-files.php?doc_id=" . $row['doc_id'] . "&action=view' class='action-link'>View</a>";
                        echo "<a href='add-users.php?doc_id=" . $row['doc_id'] . "' class='action-link'>Add User</a>";
                        echo "<a href='audit.php?doc_id=" . $row['doc_id'] . "&action=audit' class='action-link'>Audit</a>";
                        echo "</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr><td colspan='2'>Document not found</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
