<?php
session_start();
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:12 GMT -->
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

    <title>Profession - Candidates</title>
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
                    <h1>Candidates</h1>
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
	<div class="row">
		<div class="col-sm-9">
			<h2 class="page-header"><strong>215</strong> candidates matching your query</h2>

			<div class="candidates-list">

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
               
                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Elliot Sarah Scott</a></h2>
                    <h3>Data Analyst</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> San Francisco, California 
                <h5>Urgent</h5>
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">92% completed</span>
                <span class="candidates-list-item-profile-bar"><span style="width: 92%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
        </div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-1.jpg" alt="Peter Ruck">
        			</a>


        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Peter Ruck</a></h2>
                    <h3>Java Developer</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> New York City, New York
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">68% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 68%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-2.jpg" alt="Linda Young">
        			</a>


                        <a href="#" class="candidates-list-item-image-label">
                            <img src="assets/img/tmp/dropbox.png" alt="">
                        </a>

        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Linda Young</a></h2>
                    <h3>PR Manager</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Chicago, Michigan
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">78% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 78%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-3.jpg" alt="Britney Doe">
        			</a>


        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Britney Doe</a></h2>
                    <h3>Data Mining</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Philadelphia, Pennsylvania
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">82% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 82%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-4.jpg" alt="Andrew Man">
        			</a>


                        <a href="#" class="candidates-list-item-image-label">
                            <img src="assets/img/tmp/airbnb.png" alt="">
                        </a>

        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Andrew Man</a></h2>
                    <h3>Python Developer</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Denver, Colorado
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">70% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 70%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume.jpg" alt="Elliot Sarah Scott">
        			</a>


                        <a href="#" class="candidates-list-item-image-label">
                            <img src="assets/img/tmp/instagram.png" alt="">
                        </a>

        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Elliot Sarah Scott</a></h2>
                    <h3>Data Analytist</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> San Francisco, California
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">92% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 92%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-1.jpg" alt="Peter Ruck">
        			</a>


        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Peter Ruck</a></h2>
                    <h3>Java Developer</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> New York City, New York
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">68% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 68%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-2.jpg" alt="Linda Young">
        			</a>


                        <a href="#" class="candidates-list-item-image-label">
                            <img src="assets/img/tmp/dropbox.png" alt="">
                        </a>

        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Linda Young</a></h2>
                    <h3>PR Manager</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Chicago, Michigan
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">78% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 78%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-3.jpg" alt="Britney Doe">
        			</a>


        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Britney Doe</a></h2>
                    <h3>Data Mining</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Philadelphia, Pennsylvania
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">82% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 82%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

    	<div class="candidates-list-item">
            <div class="candidates-list-item-heading">
        		<div class="candidates-list-item-image">
        			<a href="#">
        				<img src="assets/img/tmp/resume-4.jpg" alt="Andrew Man">
        			</a>


                        <a href="#" class="candidates-list-item-image-label">
                            <img src="assets/img/tmp/airbnb.png" alt="">
                        </a>

        		</div><!-- /.candidates-list-item-image -->

                <div class="candidates-list-item-title">
                    <h2><a href="resume.php">Andrew Man</a></h2>
                    <h3>Python Developer</h3>
                </div><!-- /.candidates-list-item-title -->
            </div><!-- /.candidates-list-item-heading -->

            <div class="candidates-list-item-location">
                <i class="fa fa-map-marker"></i> Denver, Colorado
            </div><!-- /.candidates-list-item-location -->

            <div class="candidates-list-item-profile">
                <span class="candidates-list-item-profile-count">70% completed</span>
            	<span class="candidates-list-item-profile-bar"><span style="width: 70%"></span></span>
            </div><!-- /.candidates-list-item-rating -->
    	</div><!-- /.candidates-list-item -->

</div><!-- /.candidates-list -->

		     <div class="center">
	<ul class="pagination">
		<li>
			<a href="#">
				<i class="fa fa-chevron-left"></i>
			</a>
		</li>

		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li class="active"><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li>
			<a href="#">
				<i class="fa fa-chevron-right"></i>
			</a>
		</li>
	</ul>
  </div><!-- /.center -->
	    </div><!-- /.col-* -->
<div class="col-sm-3">
	<div class="filter-stacked">
    <form method="post" action="candidates1.php">
        
        <h3>Contract <a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="contract" value="Full Time"> Full-time</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="contract" value="Part Time"> Part-time</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="contract" value="One Time"> One-time project</label>
        </div><!-- /.checkbox -->

        
        <h3>Location: City <a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="location-city" value="Mumbai"> Mumbai</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="location-city" value="Pune"> Pune</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="location-city" value="Chennai"> Chennai</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="location-city" value="New Delhi"> New Delhi</label>
        </div><!-- /.checkbox -->


        <h3>Location: State<a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="location-state" value="Maharashtra"> Maharashtra</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="location-state" value="Tamil Nadu"> Tamil Nadu</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="location-state" value="Delhi"> Delhi</label>
        </div><!-- /.checkbox -->


        <h3> Job Post<a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="post" value="Data Analyst"> Data Analyst</label>
        </div><!-- /.checkbox -->
    
        <h3>Status <a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="post" value="Java Developer"> Java Developer</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="post" value="PR Manager"> PR Manager</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="post" value="Data Mining"> Data Mining</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="post" value="Python Developer"> Python Developer</label>
        </div><!-- /.checkbox -->

        <h3>Status <a href="#"></a></h3>

        <div class="checkbox">
            <label><input type="radio" name="status" value="Most Recent"> Most Recent</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="status" value="Featured"> Featured</label>
        </div><!-- /.checkbox -->

        <div class="checkbox">
            <label><input type="radio" name="status" value="Urgent"> Urgent</label>
        </div><!-- /.checkbox -->


        <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-refresh"></i> Reset Filter</button>
    </form>
</div><!-- /.filter-stacked -->

	    </div><!-- /.col-* -->
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
                            <h2><i class="profession profession-logo"></i>SeekForJob</h2>

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
                                <li><a href="pricing.php">Pricing</a></li>
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
                    Created by <a href="http://byaviators.com/">Aviators</a>. Premium themes and templates.
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

<!-- Mirrored from preview.byaviators.com/template/profession/candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:12 GMT -->
</html>
