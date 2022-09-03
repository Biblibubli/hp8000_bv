<?php

if (isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];
    $usersNickname = $_POST["usersNickname"];

    require_once 'dbh.inc.php';

    require_once 'functions.inc.php';
  
    if (emptyInputSignup($username, $password, $passwordrepeat, $usersNickname) !== false) {
        echo "1";
        header("location: ../signup.php?error=emptyinput");

        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");

        exit();
    }


    // if (invalidUsersNickname($usersNickname) !== false) {
    //     header("location: ../signup.php?error=invalidusersNickname");

    //     exit();
    // }

    if (pwdMismatch($password, $passwordrepeat) !== false) {
        header("location: ../signup.php?error=pwdnotmatch");

        exit();
    }

    if (usernameExist($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken");

        exit();
    }

    if (UsersNicknameExist($conn, $usersNickname) !== false) {
        header("location: ../signup.php?error=UsersNickname");

        exit();
    }

    

    createUser($conn, $username, $password, $usersNickname);

}
else {
    header("location: ../signup.php");
    exit();
}
