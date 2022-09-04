

<?php
    include_once 'header.php'
?>

<?php
    if (isset($_SESSION["userusername"])) {
        echo "<p>Welcome back, " . $_SESSION["usersnickname"] . "</p>";

    }

?>

<h2>CCBVA (California Chinese Beach Volleyball Association)</h2>
<p>CCBVA是基于洛杉矶地区的华人沙滩排球联盟。每周固定组织练球，不定期举行比赛。欢迎各个水平的朋友加入我们，一起享受加州的阳光，沙滩和排球比赛！</p>

<?php
    include_once 'footer.php'
?>