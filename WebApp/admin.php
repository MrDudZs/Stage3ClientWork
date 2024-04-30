<?php
session_start()
    ?>
<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch counts of different file_status values
$sql = "SELECT file_status, COUNT(*) AS count FROM uploaded_docs GROUP BY file_status";
$result = $conn->query($sql);

$status_counts = array(0, 0, 0); // Initialize counts for pending, approved, and rejected

if ($result->num_rows > 0) {
    // Iterate through the result set and update counts
    while ($row = $result->fetch_assoc()) {
        $status_counts[$row['file_status']] = $row['count'];
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRM</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var statusCounts = <?php echo json_encode($status_counts); ?>;
    </script>
</head>

<body>
    <div class="container-mn container-mb">
        <div class="navbar-cont-mn">
            <?php include "includes/nav.php"; ?>
        </div>

        <div class="header-mn header-mb">
            <?php include "includes/header.php"; ?>
        </div>


        <div class="docManagerMain-mn docManagerMain-mb">
            <div id="top-management-row">
                <div class="pendingRec-table-container">
                    <table class="pendingRec-table">
                        <tr class="pendingRec-tr">
                            <th class="pendingRec-th name-header">Name</th>
                            <th class="pendingRec-th">Class</th>
                            <th class="pendingRec-th">Due Date</th>
                            <th class="pendingRec-th">Owner</th>
                            <th class="pendingRec-th">Department</th>
                            <th class="pendingRec-th">Role</th>
                            <th class="pendingRec-th">Severity</th>
                            <th class="pendingRec-th">Action</th>
                        </tr>
                        <?php
                        // Connection
                        include 'php/config.php';

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to select documents with file_status = 0
                        $sql = "SELECT u.doc_id, u.doc_name, u.doc_class, u.doc_due, u.doc_owner, u.doc_severity, s.department_id, s.job_role
                                FROM uploaded_docs u
                                LEFT JOIN staff s ON u.staff_id = s.staffid
                                WHERE u.file_status = 0";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr class='pendingRec-tr'>";
                                echo "<td class='pendingRec-td scroll-text'>" . $row["doc_name"] . "</td>";
                                echo "<td class='pendingRec-td'>" . $row["doc_class"] . "</td>";
                                echo "<td class='pendingRec-td'>" . $row["doc_due"] . "</td>";
                                echo "<td class='pendingRec-td'>" . $row["doc_owner"] . "</td>";
                                echo "<td class='pendingRec-td'>";
                                if ($row["department_id"] != null) {
                                    // Fetch department name from departments table based on department_id
                                    $department_id = $row["department_id"];
                                    $department_query = "SELECT department_name FROM departments WHERE department_id = '$department_id'";
                                    $department_result = $conn->query($department_query);
                                    if ($department_result->num_rows > 0) {
                                        $department_row = $department_result->fetch_assoc();
                                        echo $department_row["department_name"];
                                    }
                                } else {
                                    echo "N/A";
                                }
                                echo "</td>";
                                echo "<td class='pendingRec-td'>" . ($row["job_role"] ?? "N/A") . "</td>";
                                echo "<td class='pendingRec-td'>" . $row["doc_severity"] . "</td>";
                                echo "<td class='pendingRec-td'>";
                                echo "<form action='approv-decline.php' method='post'>";
                                echo "<input type='hidden' name='doc_id' value='" . $row['doc_id'] . "'>";
                                echo "<select name='approval_status'>";
                                echo "<option value='pending'>Pending</option>";
                                echo "<option value='approved'>Approve</option>";
                                echo "<option value='declined'>Decline</option>";
                                echo "</select>";
                                echo "<input type='submit' name='submit' value='Submit'>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No pending documents found.</td></tr>";
                        }

                        // Close connection
                        $conn->close();
                        ?>
                    </table>
                </div>


                <div class="recordSummary-mn recordSummary-mb">
                    <h3 style="text-align: center;">Record Summary</h3>
                    <canvas id="doughnutChart" style="width:100%;max-width:250px"></canvas>
                </div>
            </div>
            <div id="bottom-management-row">
                <div class="recentTask-mn recentTask-mb">
                    <h3 style="text-align: center;">Recent Documents</h3>
                    <div class="recentRec-Table-container" style="max-height: 160px; overflow-y: auto;">
                        <table class="recentRec-table">
                            <tr class="recentRec-tr">
                                <th></th>
                                <th>Class</th>
                                <th>Uploaded</th>
                                <th>Owner</th>
                            </tr>
                            <?php
                            // Connection
                            include 'php/config.php';

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // SQL query to fetch recent changes to documents
                            $sql = "SELECT doc_class, upload_date, doc_owner, file_status FROM uploaded_docs ORDER BY upload_date DESC LIMIT 5";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr class='recentRec-tr'>";
                                    // Images based on file status
                                    echo "<td class='recentRec-td'>";
                                    switch ($row["file_status"]) {
                                        case 0:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=document-text' width='32' height='32'>";
                                            break;
                                        case 1:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=document-text' width='32' height='32'>";
                                            break;
                                        case 2:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=document-text' width='32' height='32'>";
                                            break;
                                        default:
                                            // Handle other cases if needed
                                            break;
                                    }
                                    echo "</td>";
                                    echo "<td class='recentRec-td'>" . $row["doc_class"] . "</td>";
                                    echo "<td class='recentRec-td'>" . $row["upload_date"] . "</td>";
                                    echo "<td class='recentRec-td'>" . $row["doc_owner"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No recent changes found.</td></tr>";
                            }

                            // Close connection
                            $conn->close();
                            ?>
                        </table>
                    </div>
                </div>


                <div class="recentTask-mn recentTask-mb">
                    <h3 style="text-align: center;">Recent Task</h3>
                    <div class="recentRec-Table-container" style="max-height: 160px; overflow-y: auto;">
                        <table class="recentRec-table">
                            <tr class="recentRec-tr">
                                <th></th>
                                <th>Class</th>
                                <th>Created</th>
                                <th>Owner</th>
                            </tr>
                            <?php
                            // Connection
                            include 'php/config.php';

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // SQL query to fetch recent tasks
                            $sql = "SELECT doc_class, upload_date, doc_owner, file_status FROM uploaded_docs ORDER BY upload_date DESC LIMIT 5";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr class='recentRec-tr'>";
                                    // Images based on file status
                                    echo "<td class='recentRec-td'>";
                                    switch ($row["file_status"]) {
                                        case 0:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=document-text' width='32' height='32'>";
                                            break;
                                        case 1:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=check-circle' width='32' height='32'>";
                                            break;
                                        case 2:
                                            echo "<img src='https://s2.svgbox.net/hero-outline.svg?ic=ban' width='32' height='32'>";
                                            break;
                                        default:
                                            // Handle other cases if needed
                                            break;
                                    }
                                    echo "</td>";
                                    echo "<td class='recentRec-td'>" . $row["doc_class"] . "</td>";
                                    echo "<td class='recentRec-td'>" . $row["upload_date"] . "</td>";
                                    echo "<td class='recentRec-td'>" . $row["doc_owner"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No recent tasks found.</td></tr>";
                            }

                            // Close connection
                            $conn->close();
                            ?>
                        </table>
                    </div>
                </div>

                <div class="analysis-mn">
                    <h3 style="text-align: center;">Analysis</h3>
                    <canvas id="barChart" style="width:100%;max-width:400px"></canvas>
                </div>
            </div>
        </div>

        <div id="report-sender-container">
            <div class="report-sender">
                <h3>Generate PDF Report</h3>
                <button onclick="generatePDF()" style="margin-top: 10px;">Generate PDF</button>
            </div>
        </div>


        <div class="footer-container-mn" style="position: absolute; bottom: -100%">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>
    <script src="js/charts.js"></script>
    <script src="js/reportbtn.js"></script>
    <script>
        function generatePDF() {
            // Hide elements not needed in PDF
            var elementsToHide = document.getElementsByClassName('report-sender');
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
            }

            // Open print dialog to generate PDF
            window.print();

            // Show hidden elements
            for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'block';
            }
        }
    </script>

</body>

</html>