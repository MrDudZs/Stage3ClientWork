<?php
session_start();
include 'php/config.php';

// Retrieve doc_id from the URL parameter
$doc_id = $_GET['doc_id'] ?? '';

// Retrieve audit log data for the specific document from the database
$sql = "SELECT audit_log.date, audit_log.time, CONCAT(staff.first_name, ' ', staff.surname) AS user, audit_log.change_description,
               uploaded_docs.upload_date, uploaded_docs.upload_time
        FROM audit_log
        LEFT JOIN staff ON audit_log.staffid = staff.staffid
        LEFT JOIN uploaded_docs ON audit_log.doc_id = uploaded_docs.doc_id
        WHERE audit_log.doc_id = '$doc_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Audit</title>
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
                        <h2>Document Audit</h2>
                    </div>
                    <div class="audit-table">
                        <!-- Displays audit log data for the specific document -->
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>User</th>
                                <th>Change</th>
                            </tr>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["date"] . "</td>";
                                    echo "<td>" . $row["time"] . "</td>";
                                    echo "<td>" . $row["user"] . "</td>"; 
                                    echo "<td>" . $row["change_description"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No audit log entries found</td></tr>";
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
