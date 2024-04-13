<?php
session_start();
include 'php/config.php';

// Retrieve audit log data from the database
$sql = "SELECT * FROM audit_log";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document: Audit</title>
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
        <div class="audit-main-mn">
            <main>
                <div class="main-topcont">
                    <div class="main-topleft">
                        <input type="button" value="Return" onclick="window.history.back()">
                        <!-- https://stackoverflow.com/a/13511806 -->
                    </div>
                    <div class="main-top">
                        <h2> Document Audit </h2>
                    </div>
                    <div class="audit-table">
                        <!-- Displays who created - modified - viewed - added - downloaded file -->
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>User</th>
                                <th>Change</th>
                            </tr>
                            <?php
                            $action = $_GET['action'] ?? 'unknown'; // Default to 'unknown' if action parameter is not provided
                            
                            // Display audit log data in table rows
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["date"] . "</td>";
                                    echo "<td>" . $row["time"] . "</td>";
                                    // Get username from session
                                    $username = $_SESSION['username'];
                                    echo "<td>" . $username . "</td>";
                                    echo "<td>" . $row["change_description"] . " (" . $action . ")</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No audit log entries found</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

<script src="js/return.js"></script>

</html>