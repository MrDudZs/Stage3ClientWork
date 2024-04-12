<header class="header">
    <div class="top-right-container">
        <div class="top-right-content">
            <!--Sign out/switch user test-->
            <div class="log-mn log-mb">
                <div class="dropdown-container-mn">
                    <button class="dropbtn-mn">
                        <?php
                        session_start();
                        // Check if the user is logged in
                        if (isset($_SESSION['username'])) {
                            echo "Logged in:" . $_SESSION['username'];
                        } else {
                            echo "Login";
                        }
                        ?>
                    </button>
                    <div class="dropdown-cont-mn">
                        <form action="logout.php" method="post">
                            <input type="submit" value="logout">
                        </form>
                    </div>
                </div>
            </div>
            <!--Search Bar-->
            <div class="searchbar-mn">
                <div class="searchbar-content-mn">
                    <form action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="header-center">
        <div class="kfh-logo">
            <img src="images/kfhm-logo.png" alt="kfh-logo">
        </div>
    </div>
    <div class="header-left">
        <!--Left Nav Bar-->
        <div class="sidenav-mn sidenav-mb">
            <div class="dropdown-container-mn">
                <button class="dropbtn-mn">
                    <img src="https://s2.svgbox.net/hero-outline.svg?color=green&ic=menu" width="32" height="32">
                </button>
                <div class="dropdown-cont-mn" style="left:0;">
                    <ul class="dropdown-sidenav-ul">
                        <li class="dropdown-sidenav-li"><a href="dashboard.php">Dashboard</a></li>
                        <li class="dropdown-sidenav-li"><a href="docupload.php">File Upload</a></li>
                        <li class="dropdown-sidenav-li"><a href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>