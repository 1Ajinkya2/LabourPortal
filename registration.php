<?php
session_start();
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/profession/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
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
                    <h1 class="center">Account Registration</h1>
                </div><!-- /.container -->
            </div><!-- /.document-title -->

            <div class="container">
	<div class="row">
		<div class="col-sm-12">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">
						<strong>Labour Account</strong>
						<span>I'm looking for a Work</span>
					</a>
				</li>

				<li role="presentation">
					<a href="#company" aria-controls="company" role="tab" data-toggle="tab">
						<strong>Contractor Account</strong>
						<span>We are hiring Labours</span>
					</a>
				</li>
			</ul>


            <form id="registration-form" action="personal_signup_success.php" method="POST">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="personal">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="form-register-username">Username</label>
								<input type="text" class="form-control" id="form-register-username" name="form-register-username">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-email">E-mail</label>
								<input type="email" class="form-control" id="form-register-email" name="form-register-email">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-password">Password</label>
								<input type="password" class="form-control" id="form-register-password" name="form-register-password">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-retype">Retype</label>
								<input type="password" class="form-control" id="form-register-retype" name="form-register-retype">
							</div><!-- /.form-group -->
						</div><!-- /.col-* -->

						<div class="col-sm-6">
							<div class="row">
								<div class="form-group col-sm-6">
									<label for="form-register-first-name">First Name</label>
									<input type="text" class="form-control" id="form-register-first-name" name="form-register-first-name">
								</div><!-- /.form-group -->

								<div class="form-group col-sm-6">
									<label for="form-login-surname">Surname</label>
									<input type="text" class="form-control" id="form-register-surname" name="form-register-surname">
								</div><!-- /.form-group -->
							</div><!-- /.row -->

							<div class="form-group">
								<label form="form-register-photo">Photo</label>
								<input type="file" name="form-register-photo" id="form-register-photo">
							</div><!-- /.form-group-->
						</div><!-- /.col-* -->
					</div><!-- /.row -->

					<div class="center">
						<div class="checkbox checkbox-info">
						</div><!-- /.checkbox -->

						<button type="submit" class="btn btn-secondary" onclick="change_form_action('personal')">Create an Account</button>
					</div><!-- /.center -->
				</div><!-- /.tab-pane -->

				<div role="tabpanel" class="tab-pane" id="company">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="form-register-company-username">Username</label>
								<input type="text" class="form-control" id="form-register-company-username" name="form-register-company-username">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-email">E-mail</label>
								<input type="email" class="form-control" id="form-register-company-email"
                                name="form-register-company-email">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-password">Password</label>
								<input type="password" class="form-control" id="form-register-company-password" name="form-register-company-password">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-retype">Retype</label>
								<input type="password" class="form-control" id="form-register-company-retype" name="form-register-company-retype">
							</div><!-- /.form-group -->
						</div><!-- /.col-* -->

						<div class="col-sm-6">
							<div class="form-group">
								<label for="form-register-company-name">Company Name</label>
								<input type="text" class="form-control" id="form-register-company-name" name="form-register-company-name">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-vat">VAT No.</label>
								<input type="text" class="form-control" id="form-register-company-vat" name="form-register-company-vat">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-website">Website</label>
								<input type="text" class="form-control" id="form-register-company-website" name="form-register-company-website">
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="form-register-company-address-line">Address Line</label>
								<input type="text" class="form-control" id="form-register-company-address-line" name="form_register_company_address_line">
							</div><!-- /.form-group -->
						</div><!-- /.col-* -->
					</div><!-- /.row -->

				

						<button type="submit" class="btn btn-secondary" onclick="change_form_action('company')">Create an Account</button>
					</div><!-- /.center -->
				</div><!-- /.tab-pane -->
			</div><!-- /.tab-content -->
        </form>
		</div><!-- /.col-* -->
	</div><!-- /.row -->
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
<script type="text/javascript" src="assets/js/myJavaScript.js"></script>


</body>

<!-- Mirrored from preview.byaviators.com/template/profession/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 11:09:11 GMT -->
</html>
