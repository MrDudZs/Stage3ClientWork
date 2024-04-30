<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['staffid'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve current user ID from session
$currentUserId = $_SESSION['staffid'];

// Query to retrieve access requests for the current user
$access_requests_query = "SELECT r.doc_id, r.request_time, d.doc_name, s.first_name, s.surname 
                          FROM request_access r
                          INNER JOIN uploaded_docs d ON r.doc_id = d.doc_id
                          INNER JOIN staff s ON r.staffid = s.staffid
                          WHERE d.staff_id = $currentUserId AND r.status = 'Pending'";
$access_requests_result = $conn->query($access_requests_query);

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
</head>

<body>
    <div class="container-mn">
        <div class="navbar-cont-mn">
            <?php include "includes/nav.php"; ?>
        </div>
        <div class="header-mn header-mb">
            <?php include "includes/header.php"; ?>
        </div>
        <div class="finhead-main-mn">
            <div class="content-top">
                <div class="request-notif">
                    <h3> Requests for access </h3>
                    <?php
                    if ($access_requests_result->num_rows > 0) {
                        while ($row = $access_requests_result->fetch_assoc()) {
                            echo "<p>Document: " . $row['doc_name'] . "<br>";
                            echo "Requested by: " . $row['first_name'] . " " . $row['surname'] . "<br>";
                            echo "Request time: " . $row['request_time'] . "<br>";
                            echo "<a href='manage-access.php?doc_id=" . $row['doc_id'] . "&action=approve'>Approve</a> | ";
                            echo "<a href='manage-access.php?doc_id=" . $row['doc_id'] . "&action=decline'>Decline</a></p>";
                        }
                    } else {
                        echo "<p>No pending access requests.</p>";
                    }
                    ?>
                </div>
                <div class="finhead-top">
                    <div class="table-title">
                        <h3> My Documents: </h3>
                    </div>
                    <table class="finhead-toptable">
                        <tr>
                            <th>Document Name</th>
                            <th>Severity</th>
                            <th class="docs-th">Upload Date</th>
                            <th>Delete</th>
                            <th>Access</th>
                        </tr>
                        <?php include 'includes/get-files.php'; ?>
                    </table>
                </div>
            </div>
            <div class="content-bottom">
                <div class="table-title">
                    <h3> Shared Documents </h3>
                </div>
                <table>
                    <tr>
                        <th>Document Name</th>
                        <th>Severity</th>
                        <th>Upload Date</th>
                        <th>Access</th>
                    </tr>
                    <?php include 'includes/get-filesShared.php'; ?>
                </table>
            </div>
        </div>
        <div class="footer-container-mn" style="position: absolute; bottom: -100%">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>
</body>

<script src="js/deletefiles.js"></script>

</html>