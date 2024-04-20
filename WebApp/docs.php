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
        <div class="header-cont-mn">
            <?php include "includes/header.php"; ?>
        </div>
        <div class="finhead-main-mn">
            <div class="content-top">
                <h3> Documents on system: </h3>
                <table>
                    <tr>
                        <th>Document Name</th>
                        <th>Severity</th>
                        <th>Owner</th>
                        <th>Upload Date</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    include 'includes/get-filesall.php'; 
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="js/deletefiles.js"></script>
</html>
