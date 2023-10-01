
<?php
session_start();
?>

<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
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

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.jpeg">

    <title>Labour Portal </title>
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
                            <span class="header-logo-text">LabourPortal<span class="header-logo-highlight">
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
                    <li class="active">
                        <a href="index-2.php">Home</a>
                    </li>

                    <li >
                        <a href="#">Contractors <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">
                            <li><a href="companies.php">Contractor Listing</a></li>
                            <li><a href="company-detail.php">Contractor Detail</a></li>
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
                        <a href="#">Labour <i class="fa fa-chevron-down"></i></a>

                        <ul class="sub-menu">
                            <li><a href="candidates.php">Labour List</a></li>
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
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="main-wrapper">
        <div class="main">
            <div class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h1>Brick by Brick, Opportunity Awaits: Explore Our Labour Portal</h1>
                <div class="changing"  font-size: 50px;
    color: #ffffff; font-size: 35px;
    color: red;
    font-weight: 500;
    text-decoration: dotted;
> <span class="role"></span></div>
                <h2>Well trusted and verified Contractors all around the world are using our platform to find best labours.</h2>

            </div><!-- /.col-* -->


        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.hero-content -->


<!-- <div class="stats">
    <div class="container">
        <div class="row">
            <div class="stat-item col-sm-4" >
                <strong id="stat-item-1">6,358</strong>
                <span>Labours Added</span>
            </div><!-- /.col-* -->
<!-- 
            <div class="stat-item col-sm-4" >
                <strong id="stat-item-2">78</strong>
                <span>Contractor Available </span>
            </div><!-- /.col-* -->

            <!-- <div class="stat-item col-sm-4" >
                <strong id="stat-item-3">4,304</strong>
                <span>Positions Matched</span> --> -->
            <!-- </div>/.col-* -->
        <!-- </div>/.row -->
    <!-- </div>/.container -->
<!-- </div>/.stats --> 


<div class="container">
	<div class="filter">
    <h2>Search for a  Work</h2>
    <form method="get" action="">
        <div class="row">
            <div class="form-group col-sm-5">
                <select class="form-control" title="Choose location">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                </select>
            </div><!-- /.form-group -->

            <div class="form-group col-sm-5">
                <select class="form-control" title="Choose position">
                    <option value="">Painter</option>
                    <option value="">Welder</option>
                    <option value="">Plumber</option>
                    <option value="">Construction Worker</option>
                    <option value="">Carpenter</option>

                </select>
            </div><!-- /.form-group -->

            <div class="form-group col-sm-2">
                <button type="submit" class="btn btn-block btn-secondary">Search</button>
            </div><!-- /.form-group -->
        </div><!-- /.row -->

        <ul class="filter-list">
            <li><a href="positions.php">Mumbai <span class="filter-list-count">(12)</span></a></li>
            <li><a href="positions.php">Pune <span class="filter-list-count">(15)</span></a></li>
            <li><a href="positions.php">Kolapur <span class="filter-list-count">(4)</span></a></li>
            <li><a href="positions.php">Indore <span class="filter-list-count">(24)</span></a></li>
            <li><a href="positions.php">Delhi <span class="filter-list-count">(34)</span></a></li>
            <li><a href="positions.php">chennai<span class="filter-list-count">(12)</span></a></li>
            <li><a href="positions.php">kolkata <span class="filter-list-count">(12)</span></a></li>
            <li><a href="positions.php">Surat <span class="filter-list-count">(34)</span></a></li>
            <li><a href="positions.php">srinagar <span class="filter-list-count">(7)</span></a></li>
            <li><a href="positions.php">rajasthan <span class="filter-list-count">(62)</span></a></li>
    
            <li><a href="positions.php">Beed <span class="filter-list-count">(2)</span></a></li>
            <li><a href="positions.php">Navi Mumbai <span class="filter-list-count">(23)</span></a></li>
            <li><a href="positions.php">Madras <span class="filter-list-count">(12)</span></a></li>
            <li><a href="positions.php">Nasik<span class="filter-list-count">(19)</span></a></li>
        </ul>

        <hr>

        <div class="filter-actions">
            <a href="candidates.php">All Labours</a> <span class="filter-separator">/</span>
            <a href="positions.php">All Labour Jobs</a> <span class="filter-separator">/</span>
            <a href="companies.php">All Contractor Details</a>
        </div><!-- /.filter -->
    </form>
</div><!-- /.filter -->





	<div class="panels-highlighted">
    <div class="row">
        <div class="panel-highlighted-wrapper col-sm-6">
            <div class="panel-highlighted-inner panel-highlighted-secondary">
                <h2>Hire an Labour</h2>



                <a href="registration.php" class="btn btn-white">Sign up as Contractor</a>
            </div><!-- /.panel-inner -->
        </div><!-- /.panel-wrapper -->  

        <div class="panel-highlighted-wrapper col-sm-6">
            <div class="panel-highlighted-inner panel-highlighted-primary panel">
                <h2>Looking for a job</h2>

                <a href="registration.php" class="btn btn-white">Sign up as Labour</a>
            </div><!-- /.panel-inner -->
        </div><!-- /.panel-wrapper -->
    </div><!-- /.row-->
</div><!-- /.panels -->


	<div class="page-title">
    <h2>Step Inside and See yourself! </h2>

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <p>
              “It's never too late to start over. If you weren't happy with yesterday, try something different today. Don't stay stuck. Do better.”
            </p>
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.page-title -->

<div class="posts">
    <div class="row">
        



            <div class="post-box post-box-small">
                <div class="post-box-image">
                    <a href="#">
                        <img src="C:/xampp/htdocs/Labour-Management-System-master/Project/assets/img/tmp/blog-3.jpg" alt="">
                    </a>
                </div><!-- /.post-box-image -->

                <div class="post-box-content">
                    <h2><a href="#">JOB FILTERS
</a></h2>

                    <p>
                      With a strong filter system rest assured job hunters will find their dream job with ease. Filter by the type of vacancy, job sectors and when the job was posted.
                    </p>
                </div><!-- /.post-box-content -->
            </div><!-- /.post-box -->

            <div class="post-box post-box-small">
                <div class="post-box-image">
                    <a href="#">
                        <!-- <img src="assets/img/tmp/blog-4.jpg" alt=""> -->
                    </a>
                </div><!-- /.post-box-image -->

                <div class="post-box-content">
                    <h2><a href="#">Candidate Profile Interface</a></h2>

                    <p>
                      The candidate profile page contains everything a candidate needs to get applying for jobs. From here they can edit account details, view their application history!

                    </p>
                </div><!-- /.post-box-content -->
            </div><!-- /.post-box -->


        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
</div><!-- /.posts-->


	

<!-- </div>/.container -->

<div class="cta-text">
	<div class="container">
		<div class="cta-text-inner">
			<div class="cta-text-before">I want to</div><!-- /.cta-large-before -->

			<a href="candidates.php" class="btn btn-secondary">Hire Employee</a> or <a href="positions.php" class="btn btn-secondary">Find Job</a>
		</div><!-- /.cta-text-inner -->
	</div><!-- /.container -->
</div>


        <!-- </div>/.main -->
    <!-- </div> -->

    <!-- <div class="footer-wrapper"> -->
    <!-- <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="footer-top-block">
                            <h2><i class="profession profession-logo"></i>SeekForJob </h2>

                            <p>
                              SeekForJob is a new online recruiting service that takes the pain out of job search. We make it easier to find a great job that you'll love.
                            </p>

                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div><!-- /.footer-top-block -->
                    </div><!-- /.col-* -->
<!-- 
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
                            </ul> -->
                        <!-- </div>/.footer-top-block -->
                    <!-- </div>/.col-* -->

                    <!-- <div class="col-sm-3">
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
                    </div>/
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->

        <!-- <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-left"> -->
                    <!-- &copy; <a href="#">SeekJorJob</a>, 2015 All rights reserved. -->
                <!-- </div>/.footer-bottom-left -->

                <!-- <div class="footer-bottom-right"> -->
                    <!-- Created by  -->
                <!-- </div>/.footer-bottom-right -->
            <!-- </div>/.container -->
        <!-- </div>/.footer-bottom -->
    <!-- </div> -->
<!-- </div>  -->

<!-- </div>/.page-wrapper -->

<!-- <div class="action-bar"> -->
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
        </div>
    </div>



<script>
      var typeData = new Typed(".role", {
        strings: ["Contractors", "Sub-Contractors", "Workers"],
        loop: true,
        typeSpeed: 100,
        backSpeed: 80,
        backDelay: 1000,
      });
</script>
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
