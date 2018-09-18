<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-06
 * Time: 08:33
 */

if (isset($_POST['submit'])){

    include_once '../../dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['fname']);
    $last = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uni = mysqli_real_escape_string($conn, $_POST['uni']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwdr = mysqli_real_escape_string($conn, $_POST['pwdr']);

    //Error handlers
    //Check for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uni) || empty($pwd) || empty($pwdr)){
        header("Location: ../../../index/logind/index.php?page=register&signup=empty");
        exit();
    } else {
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-ZæøåÆØÅ]*$/", $first) || !preg_match("/^[a-zA-ZæøåÆØÅ]*$/", $last)){
            header("Location: ../../../index/logind/index.php?page=register&signup=invalid");
            exit();
        } else {
            //Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../../../index/logind/index.php?page=register&signup=invalid_email");
                exit();
            } else {
                //Check if uni exists
                $sql = "SELECT * FROM users WHERE user_name='$uni';";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    header("Location: ../../../index/logind/index.php?page=register&?signup=user_taken");
                    exit();
                } else {
                    //Check if pwd = pwdr
                    if ($pwd == $pwdr) {
                        //Hashing the password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                        //Insert the user into the database
                        $sql = "INSERT INTO `users` (`user_uni`, `user_first`, `user_last`, `user_email`, `user_pwd`) VALUES ('$uni', '$first', '$last', '$email', '$hashedPwd');";
                        $conn->set_charset("utf8");
                        $result = $conn->query($sql);
                        header("Location: ../../../index/logind/index.php");
                        exit();
                    } else {
                        header("Location: ../../../index/logind/index.php?page=register&signup=invalid");
                        exit();
                    }
                }
            }
        }
    }

} else {
    header("Location: ../../../index/logind/index.php?page=register");
    exit();
}