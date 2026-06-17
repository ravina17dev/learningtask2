<html>
    <head>
        <title>my web page</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
               
            </div>
            <div class="main-navigation">
                <a href="index.php">Home</a> /
                <a href="index.php?page=aboutus">About us</a> /
                <a href="index.php?page=missionvision">Mission and vision</a> /
                <a href="index.php?page=gallery">Gallery</a>
            </div>
            <div class="container">
                <?php
                    switch(@$_GET["page"])
                    {
                        case "aboutus":
                            include("aboutus.php");
                            break;
                        case "missionvision":
                            include("missionvision.php");
                            break;
                        case "gallery":
                            include("gallery.php");
                            break;
                        default:
                            include("home.php");
                            break;
                    }
                ?>
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>