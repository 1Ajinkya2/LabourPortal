<?php
session_start();
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/position-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:12 GMT -->
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

    <title>Profession - Position Detail</title>
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
                        <span class="header-slogan-slash">/</span>
                        <span class="header-slogan-text"></span>
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
                    <h1>Position Detail</h1>
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
		<div class="col-sm-8">
			<div class="position-header">
				<h1>
					Senior Java Developer
					<span>Urgent</span>
				</h1>

				<h2>
					<span class="position-header-company-image">
						<a href="company-detail.php">
							<img src="assets/img/tmp/dropbox.png" alt="">
						</a>
					</span>

					<a href="company-detail.php">
						Dropbox
					</a>
				</h2>
			</div><!-- /.position-header -->

			<div class="position-general-information">
				<dl>
					<dt>Location</dt>
					<dd>San Fracisco, California</dd>

					<dt>Start Date</dt>
					<dd>28/11/2015</dd>

					<dt>Contract</dt>
					<dd>Full time</dd>

					<dt>Salary</dt>
					<dd>By agreement</dd>

					<dt>Job ID</dt>
					<dd>#1234</dd>
				</dl>
			</div><!-- /.position-general-information -->

			<h3 class="page-header">Description, duties, responsibilities</h3>
			<p>
				Vivamus dignissim ex eu diam eleifend pharetra. Aliquam eleifend arcu quis risus scelerisque feugiat. Donec suscipit tincidunt purus et vulputate. Proin ac rutrum urna, nec elementum leo. Praesent commodo neque nunc, efficitur aliquam quam iaculis a. Sed quis eros justo. Pellentesque ut turpis quam.
			</p>

			<h3 class="page-header">Other benefits</h3>

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
				<li>Aliquam tincidunt mauris eu risus.</li>
				<li>Vestibulum auctor dapibus neque.</li>
				<li>Nunc dignissim risus id metus.</li>
				<li>Cras ornare tristique elit.</li>
				<li>Vivamus vestibulum nulla nec ante.</li>
				<li>Praesent placerat risus quis eros.</li>
				<li>Fusce pellentesque suscipit nibh.</li>
				<li>Integer vitae libero ac risus egestas placerat.</li>
				<li>Vestibulum commodo felis quis tortor.</li>
				<li>Ut aliquam sollicitudin leo.</li>
				<li>Cras iaculis ultricies nulla.</li>
				<li>Donec quis dui at dolor tempor interdum.</li>
				<li>Vivamus molestie gravida turpis.</li>
				<li>Fusce lobortis lorem at ipsum semper sagittis.</li>
				<li>Nam convallis pellentesque nisl.</li>
				<li>Integer malesuada commodo nulla.</li>
			</ul>

			<h3 class="page-header">Personality requirements and skills</h3>

			<ul>
				<li>Ut aliquam sollicitudin leo.</li>
				<li>Cras iaculis ultricies nulla.</li>
				<li>Donec quis dui at dolor tempor interdum.</li>
				<li>Vivamus molestie gravida turpis.</li>
				<li>Fusce lobortis lorem at ipsum semper sagittis.</li>
			</ul>
		</div><!-- /.col-* -->

		<div class="col-sm-4">
			<div class="company-card">
    <div class="company-card-image">
        <span>Top Employeer</span>
        <a href="company-detail.php">
            <img src="assets/img/tmp/dropbox.png" alt=""></a>
        </a>
    </div><!-- /.company-card-image -->

    <div class="company-card-data">
        <dl>
            <dt>Website</dt>
            <dd><a href="http://example.com/">www.example.com</a></dd>

            <dt>E-mail</dt>
            <dd><a href="#">info@example.com</a></dd>

            <dt>Phone</dt>
            <dd>1-234-456-789</dd>

            <dt>Address</dt>
            <dd>
                Everton Street 231,<br>
                San Francisco, California
            </dd>
        </dl>
    </div><!-- /.company-card-data -->
</div><!-- /.company-card -->


			<div class="widget">
				<h2>Apply For Position</h2>

				<form method="get" action="">
					<div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your E-mail">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div><!-- /.form-group -->

                    <button class="btn btn-secondary pull-right" type="submit">Apply Now</button>
				</form>
			</div><!-- /.widget -->
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
                    Created by <a href="http://byaviators.com/">Aviators</a>.
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

<!-- Mirrored from preview.byaviators.com/template/profession/position-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:12 GMT -->
</html>
