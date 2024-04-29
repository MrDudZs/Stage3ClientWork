<?php
session_start()
    ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
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
    </div>
        
        <div class="indexTestUpload">
            
         <form class="docup-form" action="upload.php" method="post" enctype="multipart/form-data">
                <span>Upload File:<span>
                <input type="file" name="file" required>
                <span>Doc Serverity:</span>
                <select name="doc_severity" required>
                    <option value="LOW">LOW</option>
                    <option value="MEDIUM">MEDIUM</option>
                    <option value="HIGH">HIGH</option>
                </select>
                <span>Document Type:</span>
                <input type="text" name="class" placeholder="E.g. Budget" required>
                <span>Date Due:</span>
                <input type="date" name="doc_due" required>
                <input class="docup-submit" type="submit" value="Upload" style="margin-top: 10px;">
            </form>
        </div>
   
</body>

</html>