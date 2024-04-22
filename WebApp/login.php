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
            <?php 
                include 'includes/nav.php';
            ?>
        </div>
        <div class="header-mn header-mb">
            <?php
            include "includes/header.php";
            ?>
        </div>

        <div class="loginContainer">
            <div class="loginContent">
                <h2>Login</h2>
                <div class="loginForm">
                    <form action="loginprocess.php" method="post">
                        <input class="login-input" type="text" name="staffid" placeholder="staff id" required>
                        <br>
                        <input class="login-input" type="password" name="password" placeholder="password" required> <br>
                        <br>
                        <input class="button" type="submit" value="Login">
                    </form>
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