<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';

    require_once 'functions.inc.php';

    echo "returned";

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");

        exit();
    }
    echo "1";
    loginUsers($conn, $username, $pwd) ;
    echo "2";

}
else {
    header("location: ../login.php");
    exit();
}
