<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="dashboard-main-mn">
            <div class="dashbaord-content-mn">
                <div class="dashtop-mn">
                    <h3>
                        Documents
                    </h3>
                </div>
                <div class="dashbottom-mn">
                    <h3>
                        Requests for Access
                    </h3>
                </div>
            </div>
        </div>

        <div class="footer-container-mn">
            <?php
            include "includes/footer.php";
            ?>
        </div>
    </div>

</body>

</html>