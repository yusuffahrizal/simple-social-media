<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 11:17:30 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>InstaApp</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/'); ?>images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
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
            <a class="navbar-brand" href="<?= base_url('content/index'); ?>"><img src="<?= base_url('assets/'); ?>images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="<?= base_url('auth/logout') ?>">Profile</a></li>
              <li class="dropdown"><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
            </ul>
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
