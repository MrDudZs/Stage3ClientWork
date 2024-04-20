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
function logAction($action, $doc_id, $staff_id)
{
    global $conn;
    // Insert a record into the audit log table
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $change_description = "Clicked $action for document ID $doc_id by user ID $staff_id"; // Adjust as needed

    // SQL to insert into the audit_log table
    $sql = "INSERT INTO audit_log (date, time, staffid, doc_id, change_description) 
            VALUES ('$date', '$time', '$staff_id', '$doc_id', '$change_description')";

    // Execute the query
    $conn->query($sql);
}

// Check if action is set and log the action
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $doc_id = $_GET['doc_id'] ?? '';
    $staff_id = $_SESSION['staffid'] ?? ''; // Assuming staffid is the user ID
    logAction($action, $doc_id, $staff_id); // Pass the user ID as the third argument
}
// Retrieve the selected document from the database
$doc_id = $_GET['doc_id'] ?? '';
$sql = "SELECT * FROM uploaded_docs WHERE doc_id = '$doc_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // Fetch the document details

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
                        echo "<a href='audit.php?doc_id=" . $row['doc_id'] . "' class='action-link'>View Audit</a>";
                        echo "<a href='download.php?file=" . urlencode($row['doc_name']) . "' class='action-link'>Download</a>";
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