<?php
echo "-1";
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_POST["submit"])){

    $gameUserNickname = $_POST["gameUserNickname"];

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
    }

    else {
        header("location: ../games.php?error=notlogin");

        exit();
    }
    echo "0";

    require_once 'dbh.inc.php';
    echo "1";

    require_once 'gameregisterfunctions.inc.php';
    echo "2";


    if (emptyInputSignup($gameUserNickname) !== false) {
        header("location: ../games.php?error=emptyinput");

        exit();
    }


    if (invalidUsersNickname($gameUserNickname) !== false) {
        header("location: ../games.php?error=invalidusersNickname");

        exit();
    }

    if (alreadyRegistered($conn, $userid) !== false) {
        header("location: ../games.php?error=alreadyRegistered");

        exit();
    }


    if (UsersNicknameExist($conn, $gameUserNickname) !== false) {
        header("location: ../signup.php?error=UsersNickname");

        exit();
    }

    

    registerUser($conn, $gameUserNickname, $userid);

}

else {
    header("location: ../games.php");
    exit();
}
