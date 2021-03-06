<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 11:16:58 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/'); ?>images/fav.png"/>
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="<?= base_url('assets/'); ?>images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Cool Friends !!!</h1>
            	<p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /></p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="<?= ($form == 0) ? "active" : "" ?>"><a href="#register" data-toggle="tab">Register</a></li>
                  <li class="<?= ($form != 0) ? "active" : "" ?>"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane <?= ($form == 0) ? "active" : "" ?>" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>
                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline" method="post" action="<?= base_url('auth/signUp') ?>">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" required/>
                        <?= form_error('firstname'); ?>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" required/>
                        <?= form_error('lastname'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="email" name="email" title="Enter Email" placeholder="Your Email" required/>
                        <?= form_error('email'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required/>
                        <?= form_error('password'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-xs-12">
                        <label for="birthday" class="sr-only">Birthday</label>
                        <input id="birthday" class="form-control input-group-lg" type="date" name="birthday" title="Date of birth" placeholder="Date of birth" required/>
                        <?= form_error('birthday'); ?>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="1">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="0">Female
                      </label>
                      <?= form_error('gender'); ?>
                    </div>
                    <?php if($this->session->flashdata('error') != NULL){ ?>
                      <p style="color: red;"><?= $this->session->flashdata('error'); ?></p>
                    <?php } ?>
                    <p><a href="#">Already have an account?</a></p>
                    <button class="btn btn-primary" type="submit">Register Now</button>
                  </form><!--Register Now Form Ends-->
                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane <?= ($form != 0) ? "active" : "" ?>" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>
                  <p style="color: red;"><?= $this->session->flashdata('error_login'); ?></p>
                  <!--Login Form-->
                  <form name="Login_form" id='Login_form' method="post" action="<?= base_url('auth/login') ?>" >
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="email" name="email_login" title="Enter Email" placeholder="Your Email" required/>
                        <?= form_error('email_login'); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password_login" title="Enter password" placeholder="Password" required/>
                        <?= form_error('password_login'); ?>
                      </div>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <button class="btn btn-primary" type="submit">Login Now</button>
                  </form><!--Login Form Ends--> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>



    <!-- Scripts
    ================================================= -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.appear.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/jquery.incremental-counter.js"></script>
    <script src="<?= base_url('assets/'); ?>js/script.js"></script>
    
	</body>

<!-- Mirrored from themified.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 11:17:10 GMT -->
</html>
