<html>
    <head>
        <title>case study 07</title>
        <link rel="stylesheet" type="text/css" href="css/sstyles.css" />
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
               
            </div>
            <div class="main-navigation">
                <a href="index.php">Home</a> /
                <a href="index.php?page=proj">Project</a> /
                <a href="index.php?page=jobpos">Job Postings</a> /
                <a href="index.php?page=testi">Testimonies</a> /
                  <a href="index.php?page=contact">Contact Us</a>
            </div>
            <div class="container">
                <?php
                    switch(@$_GET["page"])
                    {
                        case "proj":
                            include("proj.php");
                            break;
                        case "jobpos":
                            include("jobpos.php");
                            break;
                        case "testi":
                            include("testi.php");
                            break;
                            case "contact":
                            include("contact.php");
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