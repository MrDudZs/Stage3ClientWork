<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/mattsdesktoptest.css" media="only screen and (min-width : 601px)" />
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

        <div class="loginContainer">
            <div class="loginContent">
                <h2>Register</h2>
                <div class="loginForm">
                    <form action="registerprocess.php" method="post">

                        <input class="input" type="email" name="email" placeholder="Email" required>
                        <br>
                        <input class="input" type="text" name="first_name" placeholder="First name" required>
                        <br>
                        <input class="input" type="text" name="surname" placeholder="Surname" required>
                        <br>
                        <input class="input" type="date" name="dob" required>
                        <br>
                        <input class="input" type="password" name="password" placeholder="Password" required>
                        <br>
                        <select class="input" name="permission_id" required>
                            <option value="">Select Permission</option>
                            <?php
                            include "php/config.php";

                            // Fetch permissions from the database
                            $sql = "SELECT permission_id, permission_name FROM permissions";
                            $result = $conn->query($sql);

                            // Loop through each row of permissions and create options for dropdown
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['permission_id'] . "'>" . $row['permission_name'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                        <input class="button" type="submit" value="Register">
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-container-mn">
            <?php
            //include "includes/footer.php";
            ?>
        </div>
    </div>

</body>

</html>