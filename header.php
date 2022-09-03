<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bv.css" type="text/css" />
</head>
<body>

  <html style="font-size: 16px;" lang="en">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="About CCBVA">
      <meta name="description" content="">
      <title>Home</title>
      <script class="u-script" type="text/javascript" src="css/jquery.js" "="" defer=""></script>
      <script class="u-script" type="text/javascript" src="css/bv.js" "="" defer=""></script>
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">


      <script type="application/ld+json">{
  		"@context": "http://schema.org",
  		"@type": "Organization",
  		"name": "",
  		"logo": "images/bv-logo.jpg"}</script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="Home">
      <meta property="og:type" content="website">
    </head>
    <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-1589"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <!-- logo -->
          <a href='/images/bv_logo.jpg' class="u-image u-image-1">
            <img src="/images/bv_logo.jpg" class="u-image u-image-1" style="width:80px;height:80px;">
          </a>
          <!-- Navigation Bar -->
          <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
              <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect> </g></svg>
              </a>
            </div>
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
  <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 0px;">Home</a></li>
  <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px;">About CCBVA</a></li>
<!-- Add link to events when function added -->
  <!-- <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px;">Events</a></li> -->
  <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="games.php" style="padding: 10px 0px;">games</a></li>

  <?php
      if (isset($_SESSION["userusername"])) {
          echo '<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="profile.php">Profile</a></li>';
          echo '<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="includes/logout.inc.php">Logout</a></li>';
      }
      else {
        echo '<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="login.php" style="padding: 10px 0px;">Login</a></li>';
        echo '<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="signup.php" style="padding: 10px 0px;">Signup</a></li>';
      }
      ?>
</ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html">Home</a></li>
    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">About CCBVA</a></li>
    <!-- Add link to events when function added -->
    <!-- </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Events</a> -->
    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="games.php">Games</a></li>

    <?php
        if (isset($_SESSION["userusername"])) {
            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="profile.php">Profile</a></li>';
            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="includes/logout.inc.php">Logout</a></li>';
        }
        else {
          echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">Login</a></li>';
          echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="signup.php">Signup</a></li>';
        }
        ?>
      </ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
        </div>
      </header>

    <!-- <header>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="games.php">Games</a>

        </div>
    <header> -->
