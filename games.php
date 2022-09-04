<?php
    include_once 'header.php';
?>

<?php
    include_once 'includes/dbh.inc.php';
?>

<?php
    if (isset($_SESSION["userid"])) {
#        echo "<p>Welcome back, " . $_SESSION["userusername"] . "</p>";
#        echo "<p>Welcome back, " . $_SESSION["userid"] . "</p>";

    }

?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/event.css" media="screen">
<body>

<section class="u-align-center u-clearfix u-section-1" id="carousel_eb0d">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h2 class="u-text u-text-default u-text-1">Upcoming Events</h2>

    <div class="u-blog u-expanded-width-xs u-blog-1">
      <div class="u-repeater u-repeater-1"><!--blog_posts-->
        <?php
            $sql = "SELECT * FROM games WHERE gamesId = 2;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '
                  <div class="u-blog-post u-repeater-item">
                    <div class="u-container-layout-1">
                        <img src="images/event_default.jpg" alt="" class="u-image u-image-1">
                      <!--blog_post_header-->
                      <h2 class="u-text u-text-2">
                        <a>', $row['gamesTitle'], '</a>
                      </h2>
                      <p class="u-large-text u-text u-text-variant u-text-3">', $row['gamesTime'], ' | ', $row['gamesPlace'], '</p>';

                      if (isset($_GET["error"])){
                          if ($_GET["error"] == "emptyinput"){
                              echo "<p class='u-text u-text-4 alert'>Please fill in your nickname.</p>";
                          }

                          if ($_GET["error"] == "invalidusersNickname"){
                              echo "<p class='u-text u-text-4 alert'>Invalid nickname, please choose a proper nickname.</p>";
                          }


                          if ($_GET["error"] == "UsersNickname"){
                              echo "<p class='u-text u-text-4 alert'>Too bad, nickname already taken, choose something else!</p>";
                          }

                          if ($_GET["error"] == "stmtfailed"){
                              echo "<p class='u-text u-text-4 alert'>Oops, something is wrong. Try again or contact admin</p>";
                          }

                          if ($_GET["error"] == "notlogin"){
                              echo "<p class='u-text u-text-4 alert'>Please log in before register for a game.</p>";
                          }

                          if ($_GET["error"] == "alreadyRegistered"){
                              echo "<p class='u-text u-text-4 alert'>You have already registered!</P>";
                          }
                      }

                  if (isset($_GET["error"])){
                      if ($_GET["error"] == "noerror"){
                          echo "<p class='u-text u-text-4'> Congradulations, game registered!</P>";
                      }
                  } else {
                    echo '
                        <form action="includes/game.register.inc.php" method="post" class="u-text u-text-4">
                            <input type="text" name="gameUserNickname" placeholder="Nickname for this game..." class="u-border-grey-30 u-input u-input-rectangle u-input-1"> </br>
                            <button type="submit" name="submit" class="u-border-2 u-border-grey-dark-1 u-btn-rectangle u-border-hover-palette-1-base u-btn-1">Sign Up</button>
                        </form>';
                  };
                  // get registered users
                  echo '<h3 class="u-text u-text-3">Registered Players: </h3>';
                  $sql = "SELECT * FROM gameRegister;";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                  if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          echo '<a class="u-text u-text-4" style="font-size:16px; color:#000; display: inline;">', $row[gameUserNickname], ' ';
                      };
                      echo '</a>';
                  };
                  echo '
                    </div>
                  </div>
                ';
            }
        ?>
    </div>
  </div>
</section>
</body>
</html>



<?php
    include_once 'footer.php';
?>
