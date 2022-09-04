<?php 

#sign up functions
function emptyInputSignup($username, $password, $passwordrepeat, $usersNickname ) {
    $result;
    if (empty($username) || empty($password) || empty($passwordrepeat) || empty($usersNickname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;       
}


function invalidUsersNickname($usersNickname) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $usersNickname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;       
}


function pwdMismatch($password, $passwordrepeat) {
    $result;
    if ($password !== $passwordrepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function UsersNicknameExist($conn, $usersNickname) {
    $sql = "SELECT * FROM users WHERE usersNickname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    mysqli_stmt_bind_param($stmt, "s", $usersNickname);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function usernameExist($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $password,$usersNickname) {

    $sql = "INSERT INTO users (usersUsername, usersPwd, usersNickname) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPwd, $usersNickname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);



    header("location: ../signup.php?error=noerror");

    exit();
}


#log in functions

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function loginUsers($conn, $username, $pwd) {

    $usernameExist = usernameExist($conn, $username);

    if ($usernameExist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $usernameExist['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $usernameExist["usersId"];
        $_SESSION["userusername"] = $usernameExist["usersUsername"];
        $_SESSION["usersnickname"] = $usernameExist["usersNickname"];
        
        header("location: ../index.php");
        exit();

    }

}