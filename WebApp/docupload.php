<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
    <?php
        session_start()
    ?>
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


        <div class="indexTestUpload">
            
        <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" required>
                <select name="doc_severity" required>
                    <option value="LOW">LOW</option>
                    <option value="MEDIUM">MEDIUM</option>
                    <option value="HIGH">HIGH</option>
                </select>
                <input type="text" name="class" placeholder="Type of document" required>
                <input type="date" name="doc_due" required>
                <input type="submit" value="Upload" style="margin-top: 10px;">
            </form>
        </div>
    </div>
</body>

</html>