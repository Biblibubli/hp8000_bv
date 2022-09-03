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
<html>
    <head>
        <title></title>
    </head>

    <body>

        <?php
            $sql = "SELECT * FROM games WHERE gamesId = 2;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h1>" . $row['gamesTitle'] . "<br></h1>";
                echo $row['gamesDetail'] . "<br>";
                echo $row['gamesPlace'] . "<br>";
                echo $row['gamesTime'] . "<br>";
            }
        ?>



        <section class="signup-form">
            <h2>Sign Up</h2>
            <form action="includes/game.register.inc.php" method="post">
                <input type="text" name="gameUserNickname" placeholder="Nickname for this game..."><br>
                <button type="submit" name="submit">Sign Up</button><br>
            </form>

            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput"){
                        echo "<P>Fill in all fields, try again!</P>";
                    }

                    if ($_GET["error"] == "invalidusersNickname"){
                        echo "<P>Choose a proper nickname, try again!</P>";
                    }


                    if ($_GET["error"] == "UsersNickname"){
                        echo "<P>Too bad, nickname already taken, choose something else!</P>";
                    }

                    if ($_GET["error"] == "stmtfailed"){
                        echo "<P>Oops, something is wrong. Try again or contact admin</P>";
                    }

                    if ($_GET["error"] == "notlogin"){
                        echo "<P>Please log in before register for a game.</P>";
                    }

                    if ($_GET["error"] == "alreadyRegistered"){
                        echo "<P>You have already registered!</P>";
                    }


                    if ($_GET["error"] == "noerror"){
                        echo "<P>Congradulations, game registered!</P>";
                    }
                }
            ?>
        </section>

        <h2>Registered Players</h2>
        <?php
            $sql = "SELECT * FROM gameRegister;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row[gameUserNickname] . "<br>";
                }
            }
        ?>

    </body>
</html>



<?php
    include_once 'footer.php';
?>
