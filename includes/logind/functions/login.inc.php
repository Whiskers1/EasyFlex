<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-06
 * Time: 09:13
 */

session_start();

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['uid']);

    //Error handlers
    //Check if inputs ate empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../index/index.php?login=error_empty");
        exit();
    } else {
        $sql = "SELECT * FORM users WHERE user_uid='$uid' OR user_email='$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index/index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index/index.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../index/index.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../index/index.php?login=error");
    exit();
}