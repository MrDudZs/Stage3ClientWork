<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRM</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />

</head>

<body>
    <div class="container-mn">
        <div class="navbar-cont-mn">
            <?php
            include "includes/nav.php";
            ?>
        </div>
        <div class="header-cont-mn">
            <?php
            include "includes/header.php";
            ?>
        </div>
        <div class="finhead-main-mn">
            <div class="content-top">
                <table>
                    <tr>
                        <th>Document Name</th>
                        <th>Severity</th>
                        <th>Upload Date</th>
                    </tr>
                    <?php include 'includes/get-files.php'; ?>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="js/deletefiles.js"></script>

</html>