<?php
session_start();

defined ('DB_HOST') or define('DB_HOST' , 'localhost');
defined ('DB_USER') or define('DB_USER' , 'root');
defined ('DB_PASS') or define('DB_PASS' , '@j1910');
defined ('DB_NAME') or define('DB_NAME' , 'oose_miniproject_database');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$query3 = "SELECT DISTINCT `city` FROM `jobs`";

$query4 = "SELECT DISTINCT `state` FROM `jobs`";

$query5 = "SELECT DISTINCT `post` FROM `jobs`";

$query6 = "SELECT DISTINCT `status` FROM `jobs`";

$result3 = mysqli_query($link,$query3);
$result4 = mysqli_query($link,$query4);
$result5 = mysqli_query($link,$query5);
$result6 = mysqli_query($link,$query6);

if (isset($_POST['submit'])) {
    $contract = isset($_POST['contract']) ? $_POST['contract'] : "";
    $city = isset($_POST['location-city']) ? $_POST['location-city'] : "";
    $state = isset($_POST['location-state']) ? $_POST['location-state'] : "";
    $post = isset($_POST['post']) ? $_POST['post'] : "";
    $status = isset($_POST['status']) ? $_POST['status'] : "";
    $notSubmit = false;

    $query2 = "SELECT * FROM `jobs` WHERE `post` = '".$post."' OR `city` = '".$city."' OR `state` = '".$state."' OR `status` = '".$status."'";

    $result2 = mysqli_query($link,$query2);
}
else{
    $notSubmit = true;
    $query1 = "SELECT * FROM `jobs` WHERE 1";
    $result1 = mysqli_query($link,$query1);
}
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/positions.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    <link href="assets/fonts/profession/style.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-wysiwyg/bootstrap-wysiwyg.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/profession-black-green.css" rel="stylesheet" type="text/css" id="style-primary">

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Profession - Open Positions</title>
</head>


<body class="hero-content-dark footer-dark">

<div class="page-wrapper">
    <div class="header-wrapper">
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-brand">
                    <div class="header-logo">
                        <a href="index-2.php">
                            <i class="profession profession-logo"></i>
                            <span class="header-logo-text"><span class="header-logo-highlight"></span>SeekForJob</span>
                        </a>
                    </div><!-- /.header-logo-->

                    <div class="header-slogan">

                    </div><!-- /.header-slogan-->
                </div><!-- /.header-brand -->

                <ul class="header-actions nav nav-pills">
                    <li><a href="login.php"><i class="fa fa-user"></i>&nbsp;

                        <?php

                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }
                        else{
                         echo "Login";
                        }
                        
                        ?>

                    </a></li>
                    <li><a href="registration.php">Sign Up</a></li>
                    <?php
                        if(isset($_SESSION['username'])){
                        echo "<li><a href='logout.php' class='primary'>Logout</a></li>";
                    }
                    ?>
                </ul><!-- /.header-actions -->

                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.container -->
        </div><!-- /.header-top -->

        <div class="header-bottom">
            <div class="container">
                <ul class="header-nav nav nav-pills collapse">
                    <li >
                        <a href="index-2.php">Home</a>
                    </li>

                    <li >
                        <a href="#">Companies <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">
                            <li><a href="companies.php">Company Listing</a></li>
                            <li><a href="company-detail.php">Company Detail</a></li>
                            <li><a href="job_vacancy.php">Create Job Vacancy</a></li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="#">Positions <i class="fa fa-chevron-down"></i> </a>
                        <ul class="sub-menu">
                            <li><a href="positions.php">Position Listing</a></li>
                            <li><a href="position-detail.php">Position Detail</a></li>
                        </ul>
                    </li>

                    <li >
                        <a href="#">Candidates <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">
                            <li><a href="candidates.php">Candidates List</a></li>
                            <li><a href="resume.php">Resume</a></li>
                            <li><a href="create-resume.php">Create Resume</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>

                    <li >
                        <a href="#">Pages <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">

                            <li><a href="login.php">Login</a></li>
                            <li><a href="registration.php">Registration</a></li>
                        </ul>
                    </li>
                </ul>

                <div class=" hidden-sm">
                    <form method="get" action="">

                    </form>
                </div><!-- /.header-search -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->
    </div><!-- /.header -->
</div><!-- /.header-wrapper-->


    <div class="main-wrapper">
        <div class="main">
            <div class="document-title">
                <div class="container">
                    <h1>Open Positions</h1>
                </div><!-- /.container -->
            </div><!-- /.document-title -->

            <div class="document-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Custom page</a></li>
                    </ul>
                </div><!-- /.container -->
            </div><!-- /.document-title -->

            <div class="container">
                <?php  

                    if($notSubmit){
                        echo "<h2 class='page-header'><strong>".mysqli_num_rows($result1)."</strong> jobs matches your search criteria</h2>";
                    }
                    else{
                        echo "<h2 class='page-header'><strong>".mysqli_num_rows($result2)."</strong> jobs matches your search criteria</h2>";

                    }

                ?>
	
<div class="row">
    <div class="col-sm-3">
        <div class="filter-stacked">
    <form method="post" action="positions.php">
    
        <h3>Location: City<a href="#"></a></h3>

        <?php

            while($row = mysqli_fetch_assoc($result3)){
                echo "<div class='checkbox'>
                        <label><input type='radio' name='location-city' value='".$row['city']."'> ".$row['city']."</label>
                      </div><!-- /.checkbox -->";
            }

        ?>

        <h3>Location: State<a href="#"></a></h3>

        <?php 

            while($row = mysqli_fetch_assoc($result4)){
                echo "<div class='checkbox'>
                        <label><input type='radio' name='location-state' value='".$row['state']."'> ".$row['state']."</label>
                      </div><!-- /.checkbox -->";
            }

        ?>

        <h3>Post <a href="#"></a></h3>

        <?php 

            while($row = mysqli_fetch_assoc($result5)){
                echo "<div class='checkbox'>
                        <label><input type='radio' name='post' value='".$row['post']."'>".$row['post']."</label>
                      </div>";
            }

        ?>


        <h3>Status <a href="#"></a></h3>

        <?php  

            while($row = mysqli_fetch_assoc($result6)){
                echo "<div class='checkbox'>
                        <label><input type='radio' name='status' value='".$row['status']."'> ".$row['status']."</label>
                      </div><!-- /.checkbox -->";
            }

        ?>

        <button type="submit" class="btn btn-secondary btn-block" name="submit"><i class="fa fa-refresh"></i> Reset Filter</button>
    </form>
</div><!-- /.filter-stacked -->

    </div><!-- /.col-* -->
    <div class="col-sm-7">
        <div class="positions-list">

            <?php

                if($notSubmit){
                    while ($row = mysqli_fetch_assoc($result1)) {
                        echo "<div class='positions-list-item'>
                                <h2>
                                    <a href='position-detail.php'>".$row['post']."</a>

                                    <span>".$row['status']."</span>

                                </h2>
                                <h3><i class='fa fa-map-marker'></i> ".$row['city'].", ".$row['state']."<br></h3>

                                <h3><i class='fa fa-user'></i> ".$row['company_name']."<br></h3>

                                <div class='position-list-item-date'>".$row['apply_date']."</div><!-- /.position-list-item-date -->
                                <div class='position-list-item-action'><a href='application.php'>Apply</a></div><!-- /.position-list-item-action -->
                            </div><!-- /.position-list-item -->";
                    }
                }
                else{
                   while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<div class='positions-list-item'>
                                <h2>
                                    <a href='position-detail.php'>".$row['post']."</a>

                                    <span>".$row['status']."</span>

                                </h2>
                                <h3><i class='fa fa-map-marker'></i> ".$row['city'].", ".$row['state']."<br></h3>

                                <h3><i class='fa fa-user'></i> ".$row['company_name']."<br></h3>

                                <div class='position-list-item-date'>".$row['apply_date']."</div><!-- /.position-list-item-date -->
                                <div class='position-list-item-action'><a href='application.php'>Apply</a></div><!-- /.position-list-item-action -->
                            </div><!-- /.position-list-item -->";
                    } 
                }

            ?>

        </div><!-- /.positions-list -->

        
</div><!-- /.row -->
</div><!-- /.container -->
        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

    <div class="footer-wrapper">
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="footer-top-block">
                            <h2><i class="profession profession-logo"></i> SeekForJob</h2>

                            <p>
                                Fusce congue, risus et pulvinar cursus, orci arcu tristique lectus, sit amet placerat justo ipsum eu diam. Pellentesque tortor urna, pellentesque nec molestie eget, volutpat in arcu. Maecenas a lectus mollis.
                            </p>

                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div><!-- /.footer-top-block -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="footer-top-block">
                            <h2>Helpful Links</h2>

                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Affiliate</a></li>

                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- /.footer-top-block -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-3">
                        <div class="footer-top-block">
                            <h2>Trending Jobs</h2>

                            <ul>
                                <li><a href="position-detail.php">Android Developer</a></li>
                                <li><a href="position-detail.php">Senior Teamleader</a></li>
                                <li><a href="position-detail.php">iOS Developer</a></li>
                                <li><a href="position-detail.php">Junior Tester</a></li>
                                <li><a href="position-detail.php">Full Stack Developer</a></li>
                                <li><a href="position-detail.php">Node.js Developer</a></li>
                                <li><a href="position-detail.php">Scala Developer</a></li>
                            </ul>
                        </div><!-- /.footer-top-left -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-left">
                    &copy; <a href="#">SeekForJob</a>, 2015 All rights reserved.
                </div><!-- /.footer-bottom-left -->

                <div class="footer-bottom-right">
                    Created by
                </div><!-- /.footer-bottom-right -->
            </div><!-- /.container -->
        </div><!-- /.footer-bottom -->
    </div><!-- /.footer -->
</div><!-- /.footer-wrapper -->

</div><!-- /.page-wrapper -->

<div class="action-bar">
    <div class="action-bar-content">
        <div class="action-bar-chapter">
            <strong>Choose Page Layout</strong>

            <ul>
                <li><a href="#" data-action="layout-wide" class="active">Wide</a></li><li><a href="#" data-action="layout-boxed">Boxed</a></li>
            </ul>
        </div><!-- /.action-bar-chapter -->

        <div class="action-bar-chapter">
            <strong>Header Style</strong>

            <ul>
                <li><a href="#" class="active" data-action="header-light">Light</a></li><li><a href="#" data-action="header-dark">Dark</a></li>
            </ul>
        </div><!-- /.action-bar-chapter -->

        <div class="action-bar-chapter">
            <strong>Navigation Style</strong>

            <ul>
                <li><a href="#" data-action="navigation-light">Light</a></li><li><a href="#" class="active" data-action="navigation-dark">Dark</a></li>
            </ul>
        </div><!-- /.action-bar-chapter -->

        <div class="action-bar-chapter">
            <strong>Hero Content Style</strong>

            <ul>
                <li><a href="#" data-action="hero-content-light">Light</a></li><li><a href="#" class="active" data-action="hero-content-dark">Dark</a></li>
            </ul>
        </div><!-- /.action-bar-chapter -->

        <div class="action-bar-chapter">
            <strong>Footer Style</strong>

            <ul>
                <li><a href="#" data-action="footer-light">Light</a></li><li><a href="#"  class="active" data-action="footer-dark">Dark</a></li>
            </ul>
        </div><!-- /.action-bar-chapter -->

        <div class="action-bar-chapter">
            <strong>Color Combination</strong>

            <table>
                <tr>
                    <td><a href="assets/css/profession-purple-red.css">Purple / Red</a></td>
                    <td><a href="assets/css/profession-blue-cyan.css">Blue / Cyan</a></td>
                </tr>

                <tr>
                    <td><a href="assets/css/profession-gray-orange.css">Gray / Orange</a></td>
                    <td><a href="assets/css/profession-black-green.css" class="active">Black / Green</a></td>
                </tr>

                <tr>
                    <td><a href="assets/css/profession-blue-navy.css">Blue / Navy</a></td>
                    <td></td>
                </tr>
            </table>
        </div><!-- /.action-bar-chapter -->
    </div><!-- /.action-bar-content -->


</div><!-- /.action-bar -->


<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.ezmark.js"></script>

<script type="text/javascript" src="assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-select/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-wysiwyg/bootstrap-wysiwyg.min.js"></script>

<script type="text/javascript" src="assets/libraries/cycle2/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="assets/libraries/cycle2/jquery.cycle2.carousel.min.js"></script>

<script type="text/javascript" src="assets/libraries/countup/countup.min.js"></script>

<script type="text/javascript" src="assets/js/profession.js"></script>


</body>

<!-- Mirrored from preview.byaviators.com/template/profession/positions.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:12 GMT -->
</html>

