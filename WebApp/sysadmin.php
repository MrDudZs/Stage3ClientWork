<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
        <div class="sysmain-cont-mn">
            <main>
                <div class="cont-left">
                    <?php

                    ?>
                </div>
                <div class="cont-right">
                    <form action="register.php">
                        <h3> Create Staff Accounts </h3>
                        <input class="button" type="submit" value="Create User">
                    </form>
                </div>
            </main>
        </div>
        <div class="footer-mn">
            <?php
            include "includes/footer.php"
                ?>
        </div>
    </div>
</body>

</html>