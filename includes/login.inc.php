<?php

if(isset($_POST["submit"])) {
    echo "1";
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    echo "1";
    require_once 'functions.inc.php';
    echo "2";


    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");

        exit();
    }

    loginUsers($conn, $username, $pwd) ;

}
else {
    header("location: ../login.php");
    exit();
}
