

<?php
    include_once 'header.php'
?>

<?php
    if (isset($_SESSION["userusername"])) {
        echo "<p>Welcome back, " . $_SESSION["userusername"] . "</p>";

    }

?>



<?php
    include_once 'footer.php'
?>