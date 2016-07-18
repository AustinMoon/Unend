<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="http://quickcorrections.com/qc/img/logo.png"/>
	<title> Quick Corrections</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	

	<!-- css -->
    
	<link href="http://quickcorrections.com/qc/css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://quickcorrections.com/qc/css/font-awesome.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://quickcorrections.com/qc/css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="http://quickcorrections.com/qc/css/bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://quickcorrections.com/qc/css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://quickcorrections.com/qc/css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="http://quickcorrections.com/qc/css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://quickcorrections.com/qc/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://quickcorrections.com/qc/css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://quickcorrections.com/qc/css/dist/js/sb-admin-2.js"></script>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<header id="site-header" >
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						
                	<a href="<?= base_url('user') ?>" class="navbar-brand" ><img src="http://quickcorrections.com/qc/img/qc_logo.png" style="width:100%; display:inline"></a>


                	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right" style="padding-right:35px" >
						<?php if ($this->ion_auth->logged_in()) : ?>
						<?php if ($this->ion_auth->in_group(4)) {
           				 echo'<li ><a  href="http://quickcorrections.com/qc/login3/tutor/"><b >Go to Tutor Page</b></a></li>';} ?>
                        <?php if ($this->ion_auth->is_admin()) {
           				 echo'<li ><a  href="http://quickcorrections.com/qc/login3/admin/proofreading_orders"><b >Proofreading</b></a></li>
           				 	<li ><a  href="http://quickcorrections.com/qc/login3/admin/requests"><b >See All Requests</b></a></li>
           					 <li ><a  href="http://quickcorrections.com/qc/login3/auth/"><b >Go To Admin Page</b></a></li>
            				';} ?>

						<li ><a  href="http://quickcorrections.com/qc/login3/user/aboutus"><b >Why QuickCorrections</b></a></li>
                        <li><a href="http://quickcorrections.com/qc/login3/user/payment">Buy Points</a></li>
                        <li><a href="<?= base_url('auth/logout') ?>"> Sign Out<br/></a>
                        </li>

                        <div clas="row">
                      	<h5 style="float:right; padding-right:30px; color:#E6858F">Welcome! Your Point : <?=$points ?></h5>
                      	</div>

                       

                        
                  
						<?php else : ?>
						

							<li ><a class=""  href="http://quickcorrections.com/qc/login3/user/aboutus"><b>Why QuickCorrections</b></a></li>
							<li><a href="http://quickcorrections.com/qc/login3/user/price">Pricing</a></li>               
                            <li><a href="<?= base_url('auth/create_user') ?>">Sign Up</a></li>
							<li><a href="<?= base_url('auth/login') ?>">Sign In</a></li>
						
						<?php endif; ?>
					</ul>

				</div>

				
				</div>
				
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->

	<main id="site-content" role="main">
		
		<?php if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		<?php endif; ?>
		
