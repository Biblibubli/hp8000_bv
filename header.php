<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>

    <header>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="games.php">Games</a>
            <?php
                if (isset($_SESSION["userusername"])) {
                    echo "<a href='profile.php'>Profile page</a>";
                    echo "<a href='includes/logout.inc.php'>Log out</a>";
                }
                else {
                    echo "<a href='signup.php'>Sign up</a>";
                    echo "<a href='login.php'>Log in</a>";
                }
            ?>

        </div> 
    <header>