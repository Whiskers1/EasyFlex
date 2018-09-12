<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-06
 * Time: 11:09
 */

if (isset($_SESSION)) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index/logind/index.php");
    exit();
} else {
    header("Location: ../index/logind/index.php");
    exit();
}