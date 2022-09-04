
<?php
    include_once 'header.php'
?>


<head>
    <link rel="stylesheet" href="css/login.css" media="screen">
    <meta name="generator" content="login page">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>


<section class="u-clearfix u-section-1">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-form u-form-1">
      <form action="includes/login.inc.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
        <div class="u-form-group u-form-name"><h2 class='form_title'>Log In</h2></div>
        <div class="u-form-group u-form-name">
        <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo "<p class='alert'>Please fill in all required fields</p>";
                }

                if ($_GET["error"] == "wronglogin"){
                    echo "<p class='alert'>Username & Password do not match. Please try again.</p>";
                }

            }
        ?>
        </div>
        <div class="u-form-group u-form-name">
          <label class="u-label">Username *</label>
          <input type="text" name="username" placeholder="Enter your Username" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
        </div>
        <div class="u-form-group u-form-password">
          <label class="u-label">Password *</label>
          <input type="password" name="pwd" placeholder="Enter your Password" class="u-border-grey-30 u-input u-input-rectangle u-input-2" required=""><br>
        </div>
        <div class="u-align-left u-form-group u-form-submit">
          <button class="u-btn u-btn-submit u-button-style u-btn-1" type="submit" name="submit">Log In</button><br>
        </div>
      </form>
    </div>
    <a href="signup.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-1-base u-btn-3">Don't have an account? Sign up now</a>
  </div>

</section>

<?php
    include_once 'footer.php'
?>
