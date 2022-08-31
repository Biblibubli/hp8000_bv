<?php

echo "reached";

function emptyInputSignup($gameUserNickname) {
    $result;
    if (empty($gameUserNickname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}



function invalidUsersNickname($gameUserNickname) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $gameUserNickname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;       
}



function UsersNicknameExist($conn, $gameUserNickname) {
    $sql = "SELECT * FROM gameRegister WHERE gameUserNickname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    mysqli_stmt_bind_param($stmt, "s", $gameUserNickname);
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

function alreadyRegistered($conn, $userid) {
    $sql = "SELECT * FROM gameRegister WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    mysqli_stmt_bind_param($stmt, "s", $userid);
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



function registerUser($conn, $gameUserNickname, $userid) {

    $sql = "INSERT INTO gameRegister (gameUserNickname, usersId, gamesId) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();       

    }

    $gameid = 2;

    mysqli_stmt_bind_param($stmt, "sss", $gameUserNickname, $userid, $gameid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../games.php?error=noerror");

    exit();
}