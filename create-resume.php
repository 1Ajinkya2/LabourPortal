<?php
session_start();
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/create-resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
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

    <title>Profession - Create Resume</title>
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

                    <li class="active">
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

                <div class="header-search hidden-sm">
                    <form method="get" action="">
                        <input type="text" class="form-control" placeholder="Search ...">
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
                    <h1 class="center">Create Resume</h1>
                </div><!-- /.container -->
            </div><!-- /.document-title -->

            <div class="container">
    <div class="col-sm-9">
        <form method="get" action="">
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label form="form-register-photo">Photo</label>
                        <input type="file" name="form-register-photo" id="form-register-photo">
                    </div><!-- /.form-group-->
                </div><!-- /.col-* -->

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Contact Information</h3>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Biography</h3>

            <div class="form-group">
                <textarea id="editor" class="form-control"></textarea>
            </div><!-- /.form-group -->

            <h3 class="page-header">Experience <a href="#" class="btn btn-primary">Add Another</a></h3>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date From</label>
                                <input type="text" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date To</label>
                                <input type="text" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </div><!-- /.col-* -->

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <h3 class="page-header">Education <a href="#" class="btn btn-primary">Add Another</a></h3>

            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Degree</label>
                        <input type="text" class="form-control">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <hr>

            <div class="center">
                <button type="submit" class="btn btn-secondary btn-lg">Save Resume</button>
            </div><!-- /.center -->
        </form>
    </div><!-- /.col-* -->

    <div class="col-sm-3">
        <div class="widget">
            <p>
                <a href="login.php" class="btn btn-block btn-secondary">Sign In</a>
            </p>

            <p>
                <a href="#" class="btn btn-block btn-linkedin">LinkedIn Import</a>
            </p>

            <p>
                <a href="#" class="btn btn-block btn-default">Quick Preview</a>
            </p>
        </div><!-- /.widget -->

        <div class="widget">
            <h2>Navigation</h2>

            <ul class="nav">
                <li><a href="#"><span>1.</span> Basic Information</a></li>
                <li><a href="#"><span>2.</span> Contact</a></li>
                <li><a href="#"><span>3.</span> Biography</a></li>
                <li><a href="#"><span>4.</span> Experience</a></li>
                <li><a href="#"><span>5.</span> Education </a></li>
            </ul>
        </div><!-- /.widget -->

        <div class="widget">
            <h2>Do you have an account?</h2>

            <p>If you don't have an account and you are looking for new employees. Feel free to <a href="registration.php">create new registration</a> for companies with transparent pricing.</p>
        </div><!-- /.widget -->
    </div><!-- /.col-* -->
</div><!-- /.container -->

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


</body>

<!-- Mirrored from preview.byaviators.com/template/profession/create-resume.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
</html>
