
<?php
    include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username..."><br>
        <input type="password" name="password" placeholder="Password..."><br>
        <input type="password" name="passwordrepeat" placeholder="Repeat password..."><br>
        <input type="text" name="usersNickname" placeholder="Your Nickname..."><br>
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

            if ($_GET["error"] == "pwdnotmatch"){
                echo "<P>Passwords do not match, try again!</P>";
            }

            if ($_GET["error"] == "usernametaken"){
                echo "<P>Too bad, username already taken, choose something else!</P>";
            }

            if ($_GET["error"] == "UsersNickname"){
                echo "<P>Too bad, nickname already taken, choose something else!</P>";
            }

            if ($_GET["error"] == "stmtfailed"){
                echo "Oops, something is wrong. Try again or contact admin</P>";
            }

            if ($_GET["error"] == "noerror"){
                echo "Congradulations!</P>";
            }
        }
    ?>
</section>

    
<?php
    include_once 'footer.php'
?>