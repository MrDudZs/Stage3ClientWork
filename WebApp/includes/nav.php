<nav class="topnav-mn">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <?php
        // Check the permission ID of the logged-in user
        if (isset($_SESSION['permission_id'])) {
            $permission_id = $_SESSION['permission_id'];

            // Display links based on the user's permission level
            switch ($permission_id) {
                case 1:
                    // User with permission ID 1
                    echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
                    echo '<li><a href="docs.php">DOCUMENTS</a></li>';
                    echo '<li><a href="admin.php">ADMIN</a></li>';
                    break;
                case 2:
                    // User with permission ID 2
                    echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
                    echo '<li><a href="docs.php">DOCUMENTS</a></li>';
                    echo '<li><a href="admin.php">ADMIN</a></li>';
                    break;
                case 3:
                    // User with permission ID 3
                    echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
                    echo '<li><a href="docs.php">DOCUMENTS</a></li>';
                    echo '<li><a href="admin.php">ADMIN</a></li>';
                    break;
                case 4:
                    // User with permission ID 4
                    echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
                    echo '<li><a href="docs.php">DOCUMENTS</a></li>';
                    break;
                case 5:
                    // User with permission ID 5
                    echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
                    echo '<li><a href="docs.php">DOCUMENTS</a></li>';
                    break;
                default:
                    // Handle other cases if needed
                    break;
            }
        }
        ?>
    </ul>
</nav>