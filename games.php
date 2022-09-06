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
<link rel="stylesheet" href="css/games.css" media="screen">
<body>

  <section class="u-align-center u-clearfix u-white u-section-1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div id="carousel-5989" data-interval="6000" data-u-ride="false" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-5989" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-5989" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">

<?php
$sql = "SELECT * FROM games WHERE gamesId = 2;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '
          <div class="u-active u-carousel-item u-container-style u-slide">
            <div class="u-container-layout u-container-layout-1">
              <h3 class="u-align-left u-large-text u-text post_title">', $row['gamesTitle'], '</h3>
              <p class="u-align-left u-large-text u-text u-text-variant post_content">', $row['gamesTime'], ' | ', $row['gamesPlace'], '</p>
              <button type="button" class="collapsible post_content">Details +</button>
              <div class="content">
                <p class="post_details" style="white-space: pre-line">赛事细则：
1. 队员分组:  
> (A队) 队长：马克西；成员：文轩、Steven、黄凌宇，Peak，梓晟，大牛，Serena，Xixi
> (B队) 队长：小马哥；成员：臧臧、Alex、天、Ryan、泽杨、成宇、春、Ronnie、Jess
> (C队) 队长：老白哥；成员：至善、Lung Chi、QQ、阿特、皓哥、Qingwei、Chenny、Jessica、Wenna
 
2. 比赛类型：
（1）2v2 A组 （2）2v2 B组（3）3v3男子组 （4）3v3 混合组 （5）5v5 （6）趣味赛 A组（7）趣味赛 B组 （8）趣味赛 C组 （9）女子表演赛（所有女生不分队伍均可参加，自由分组，比赛结果不计入队伍积分）
 
3. 比赛细则：
>  每个队员至少参加两个类型的比赛
> 2v2 A组、2v2 B组、3v3男子组、3v3 混合组： 每局15分
> 5v5 ：每局21分
> 3v3 混合组 、5v5：如果连赢三个球，则换本队下一名球员发球
> 每场比赛进行到一半交换场地
 
4. 比赛积分：
> 2v2 A组、2v2 B组、3v3男子组、3v3 混合组： 赢一场积1分
>  5v5：赢一场积2分
> 趣味赛 A组、趣味赛 B组、趣味赛 C组： 每组第一名1分，第二名0.5分
>  总分高的队伍获胜
 
5. 比赛奖品
> 比赛奖品由大家注入的奖池多少决定（奖池将用于给优胜队伍购买奖品及趣味比赛道具等活动其他相关花费）
 
6. 比赛日程：
9:00 – 9:30      集合与热身
9:30 – 10:15     2v2 A组，2v2 B组
10:15 – 11:00  女子表演赛、趣味赛 A组、趣味赛 B组、趣味赛 C组
11:00 – 11:45    3v3 混合组， 3v3男子组
11:45 – 12:45    5v5
12:45 – 13:00   比赛颁奖</p>
              </div>
              ';
              echo '<button type="button" class="collapsible post_content">Registered Players +</button>
              <div class="content">';
              $sql = "SELECT * FROM gameRegister;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<a class="post_details">', $row[gameUserNickname], '</a><br>';
                  };
              };
              echo '</div>';

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
                <form action="includes/game.register.inc.php" method="post" class="u-form_layout">
                <input type="text" name="gameUserNickname" placeholder="Nickname">
                <button type="submit" name="submit" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50">Sign Up</button>
                </form>
                </div>
              </div>';
          };
      echo '
          <div class="u-align-center u-carousel-item u-container-style u-slide">
            <div class="u-container-layout u-container-layout-1">
              <h2 class="u-align-left u-text u-text-1">to be announced</h2>
            </div>
          </div>
        </div>

        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-1" href="#carousel-5989" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-hidden-xs u-icon-circle u-spacing-10 u-carousel-control-2" href="#carousel-5989" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
    </div>
  </section>

</body>
</html>
';
}
?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<?php
    include_once 'footer.php';
?>
