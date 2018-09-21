<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-06
 * Time: 09:13
 */

session_start();

if (isset($_POST['submit'])) {

    include_once '../../dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $radio = mysqli_real_escape_string($conn, $_POST['radio']);

    //Error handlers
    //Check if inputs ate empty
    if (empty($email) || empty($pwd) || empty($radio)) {
        header("Location: ../../../index/logind/index.php?login=error_empty");
        exit();
    } else {

        //$sql = "SELECT `id`, `user_uni`, `user_first`, `user_last`, `user_email`, `user_pwd`, `user_access` FROM `users` WHERE `user_uni`='$email' OR `user_email`='$email';";
        $sql = "CALL SELECT_User('$email', '$email');";
        $conn->set_charset("utf8");
        $result = $conn->query($sql);

        if ($result->num_rows < 1) {
            header("Location: ../../../index/logind/index.php?login=error1");
            exit();
        } else {
            if ($row = $result->fetch_assoc()) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../../../index/logind/index.php?login=error2");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_uni'] = $row['user_uni'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_acc'] = $row['user_access'];

                    header("Location: ../../../index/student/index.php");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../../../index/logind/index.php?login=error3");
    exit();
}