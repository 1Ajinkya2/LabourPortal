<?php
session_start();

defined ('DB_HOST') or define('DB_HOST' , 'localhost');
defined ('DB_USER') or define('DB_USER' , 'root');                    
defined ('DB_PASS') or define('DB_PASS' , '@j1910');
defined ('DB_NAME') or define('DB_NAME' , 'oose_miniproject_database');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($link){
    $fname = $_POST['form-applicant-firstname'];
    $lname = $_POST['form-applicant-lastname'];
    $post = $_POST['form-applicant-post'];
    $city = $_POST['form-applicant-city'];
    $state = $_POST['form-applicant-state'];
    $contract = $_POST['form-applicant-contract'];

    $query = "INSERT INTO `candidates` (`fname`, `lname`, `post`, `city`, `state`, `profile_completed`, `contract`, `status`) VALUES ('".$fname."','".$lname."','".$post."','".$city."','".$state."',75,'".$contract."','Urgent')";

    $result = mysqli_query($link,$query);

    if($result){
        $check1 = true;
        $check = false;
    }
    else{
        $check = true;
    }
}

?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
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

    <title>Profession - Account Registration</title>
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
                            <span class="header-logo-text"><span class="header-logo-highlight">.</span>SeekForJob</span>
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
                    <li><a href="create-resume.php" class="primary">Create Resume</a></li>
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

                    <li >
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

                    <li class="active">
                        <a href="#">Pages <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">

                            <li><a href="login.php">Login</a></li>
                            <li><a href="registration.php">Registration</a></li>
                        </ul>
                    </li>
                </ul>

                <div class=" hidden-sm">
                    <form method="get" action="signupsuccess.php">

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
                    <?php
                        if($check1){
                        echo "<h1 class='center'>Application Successfull</h1>";
                    }
                    else{
                        echo "<h1 class='center'>Application Failed</h1>";
                    }
                    ?>
                </div><!-- /.container -->
            </div><!-- /.document-title -->
            <?php
                if($check){
                echo "<a href='application.php' style='margin-left: 430px;' class='hero-content-action'>Apply Again</a>";
            }

            else{
            echo "<a href='index-2.php' style='margin-left: 430px;' class='hero-content-action'>Back to Home</a>";
        }
            ?>

            </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
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
<script type="text/javascript" src="assets/js/myJavaScript.js"></script>


</body>

    </html>
