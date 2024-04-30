<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
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
                <div class="table-title">
                    <h3> Documents on system: </h3>
                </div>
                <table>
                    <tr>
                        <th class="docs-th">Document Name</th>
                        <th class="docs-th">Severity</th>
                        <th class="docs-th">Owner</th>
                        <th class="docs-th">Upload Date</th>
                        <th class="docs-th">Action</th>
                    </tr>
                    <?php
                    include 'includes/get-filesall.php';
                    ?>
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