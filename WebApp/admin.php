<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRM</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
    <?php
    session_start()
        ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container-mn container-mb">
        <div class="navbar-cont-mn">
            <?php
            include "includes/nav.php";
            ?>
        </div>

        <div class="header-mn header-mb">
            <?php
            include "includes/header.php";
            ?>
        </div>


        <div class="docManagerMain-mn docManagerMain-mb">
            <div id="top-management-row">
                <div class="pendingRecords-mn pendingRecords-mb">
                    <h3 style="text-align: center;">Pending Records</h3>
                    <div class="pendingRec-table-container">
                        <table class="pendingRec-table">
                            <tr class="pendingRec-tr">
                                <th class="pendingRec-th name-header">Name</th>
                                <th class="pendingRec-th">Class</th>
                                <th class="pendingRec-th">Due Date</th>
                                <th class="pendingRec-th">Owner</th>
                                <th class="pendingRec-th">Department</th>
                                <th class="pendingRec-th">Role</th>
                                <th class="pendingRec-th">Serverity</th>
                            </tr>
                            <?php
                            // Connection
                            include 'php/config.php';

                            // Check connection
                            if ($conn->connect_error) {
                                die("connection failed: " . $conn->connect_error);
                            }

                            // SQL query to select documents with file_status = 0
                            $sql = "SELECT doc_name, doc_class, doc_due, doc_owner, doc_severity FROM uploaded_docs WHERE file_status = 0";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr class='pendingRec-tr'>";
                                    echo "<td class='pendingRec-td scroll-text'>" . $row["doc_name"] . "</td>"; // Display doc_name with scrolling effect
                                    echo "<td class='pendingRec-td'>" . $row["doc_class"] . "</td>"; // Display doc_class
                                    echo "<td class='pendingRec-td'>" . $row["doc_due"] . "</td>"; // Display doc_due
                                    echo "<td class='pendingRec-td'>" . $row["doc_owner"] . "</td>"; // Display doc_owner
                                    echo "<td class='pendingRec-td'></td>"; // Leave department blank
                                    echo "<td class='pendingRec-td'></td>"; // Leave role blank
                                    echo "<td class='pendingRec-td'>" . $row["doc_severity"] . "</td>"; // Display doc_severity
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>No pending documents found.</td></tr>";
                            }

                            // Close connection
                            $conn->close();
                            ?>
                        </table>
                    </div>

                </div>
                <div class="recordSummary-mn recordSummary-mb">
                    <h3 style="text-align: center;">Record Summary</h3>
                    <canvas id="doughnutChart" style="width:100%;max-width:250px"></canvas>
                </div>
            </div>
            <div id="bottom-management-row">
                <div class="recentRecords-mn recentRecords-mb">
                    <h3 style="text-align: center;">Recent Records</h3>
                    <div class="recentRec-Table-container">
                        <table class="recentRec-table">
                            <tr class="recentRec-tr">
                                <th class="recentRec-th"></th>
                                <th class="recentRec-th">Name:</th>
                                <th class="recentRec-th">Size:</th>
                                <th class="recentRec-th">Created:</th>
                                <th class="recentRec-th"> Owner:</th>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="recentTask-mn recentTask-mb">
                    <h3 style="text-align: center;">Recent Task</h3>
                    <div class="recentRec-Table-container">
                        <table class="recentRec-table">
                            <tr class="recentRec-tr">
                                <th class="recentRec-th"></th>
                                <th class="recentRec-th">Name:</th>
                                <th class="recentRec-th">Size:</th>
                                <th class="recentRec-th">Created:</th>
                                <th class="recentRec-th">Owner:</th>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=check-circle" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">18.03.2024</td> <!--Set up so that dates increase by day-->
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=check-circle" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">Yesterday</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">Yesterday</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">Yesterday</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
                            <tr class="recentRec-tr">
                                <td class="recentRec-td">
                                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=document-text" width="32"
                                        height="32">
                                </td>
                                <td class="recentRec-td">Proposal</td>
                                <td class="recentRec-td">8.1MB</td>
                                <td class="recentRec-td">Yesterday</td>
                                <td class="recentRec-td">Matt Dudley</td>
                            </tr>
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
                <h3>Send Report</h3>
                <input onclick="sendReport()" type="submit" value="Send Report" style="margin-top: 10px;">
            </div>
        </div>

        <div class="footer-container-mn">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>
    <script src="js/charts.js"></script>
    <script src="js/reportbtn.js"></script>
</body>

</html>