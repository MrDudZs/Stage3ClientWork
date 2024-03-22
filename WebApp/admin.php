<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="container-mn container-mb">
        <div class="navbar-mn navbar-mb">
            <nav class="topnav-mn">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="document.html">DOCUMENTS</a></li>
                    <li><a href="archives.html">ARCHIVES</a></li>
                    <li><a href="admin.html">ADMIN</a></li>
                </ul>
            </nav>
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
                                <th class="pendingRec-th">Name</th>
                                <th class="pendingRec-th">Class</th>
                                <th class="pendingRec-th">Due Date</th>
                                <th class="pendingRec-th">Owner</th>
                                <th class="pendingRec-th">Department</th>
                                <th class="pendingRec-th">Role</th>
                                <th class="pendingRec-th">Serverity</th>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
                            <tr class="pendingRec-tr">
                                <td class="pendingRec-td">Example Contract</td>
                                <td class="pendingRec-td">Proposal</td>
                                <td class="pendingRec-td">20.09.2100</td>
                                <td class="pendingRec-td">Matt Dudley</td>
                                <td class="pendingRec-td">Finance</td>
                                <td class="pendingRec-td">Head of Finance</td>
                                <td class="pendingRec-td">HIGH</td>
                            </tr>
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