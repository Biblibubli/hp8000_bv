<?php
    include_once 'header.php'
?>

<?php
    if (isset($_SESSION["userusername"])) {
        echo "<h2>" . $_SESSION["usersnickname"] . "</h2>";

    }

?>


<?php
    include_once 'footer.php'
?>