
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
    <div class="u-form u-login-control u-form-1">
        <form action="includes/signup.inc.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <h5>Sign Up</h5>
          </div>

          <div class="u-form-group u-form-name">
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p class='alert'>Fill in all fields, try again!</p>";
                    }

                    if ($_GET["error"] == "invalidusersNickname"){
                        echo "<p class='alert'>Choose a proper nickname, try again!</p>";
                    }

                    if ($_GET["error"] == "pwdnotmatch"){
                        echo "<p class='alert'>Passwords do not match, try again!</p>";
                    }

                    if ($_GET["error"] == "usernametaken"){
                        echo "<p class='alert'>Too bad, username already taken, choose something else!</p>";
                    }

                    if ($_GET["error"] == "UsersNickname"){
                        echo "<p class='alert'>Too bad, nickname already taken, choose something else!</p>";
                    }

                    if ($_GET["error"] == "stmtfailed"){
                        echo "<p class='alert'>Oops, something is wrong. Try again or contact admin</p>";
                    }

                    if ($_GET["error"] == "noerror"){
                        echo "<p class='alert'>Congradulations!</p>";
                    }
                }
            ?>
          </div>

          <div class="u-form-group u-form-name">
            <label class="u-label">Username *</label>
            <input type="text" name="username" placeholder="Enter your username" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-name">
            <label class="u-label">Password *</label>
            <input type="password" name="password" placeholder="Enter your password" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-name">
            <label class="u-label">Repeat Password *</label>
            <input type="password" name="passwordrepeat" placeholder="Please repeat your password" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-name">
            <label class="u-label">Nickname *</label>
            <input type="text" name="usersNickname" placeholder="Please enter your nickname" class="u-border-grey-30 u-input u-input-rectangle u-input-1" required=""><br>
          </div>
          <div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">
              Sign Up</a>
              <input type="submit" name="submit"  class="u-form-control-hidden">
          </div>
      </form>
    </div>
  </div>
</section>


<?php
    include_once 'footer.php'
?>
