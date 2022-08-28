
<?php
    include_once 'header.php'
?>

<section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username..."><br>
        <input type="password" name="pwd" placeholder="Password..."><br>
        <button type="submit" name="submit">Log In</button><br>
    </form>

    <?php
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
                echo "<P>Fill in all fields, try again!</P>";
            }

            if ($_GET["error"] == "wronglogin"){
                echo "<P>Username & Password do not match!</P>";
            }

        }
    ?>

</section>
    
<?php
    include_once 'footer.php'
?>