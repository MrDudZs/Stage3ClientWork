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
        <div class="docManagerHeader-mn docManagerHeader-mb">
            <header>
                <div class="top-right-content">
                    <!--Sign out/switch user test-->
                    <div class="log-mn log-mb" style="float: right;">
                        <div class="dropdown-container-mn">
                            <button class="dropbtn-mn">Logged in:</button>
                            <div class="dropdown-cont-mn">
                                <input type="submit" value="logout">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-left-content">
                    <!--Left Nav Bar-->
                    <div class="sidenav-mn sidenav-mb" style="float:left;">
                        <div class="dropdown-container-mn">
                            <button class="dropbtn-mn">
                                <img src="https://s2.svgbox.net/hero-outline.svg?color=green&ic=menu" width="32"
                                    height="32">
                            </button>
                            <div class="dropdown-cont-mn" style="left:0;">
                                <li><a href="index.php">File Upload</a></li> 
                            </div>
                        </div>
                    </div>
                </div>

            </header>
        </div>

        <div class="indexTestUpload">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file"><br />
                <input type="submit" value="Upload" style="margin-top: 10px;">
            </form>
        </div>
    </div>
</body>

</html>