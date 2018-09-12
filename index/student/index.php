<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 12:36
 */

    include_once '../../includes/dbh.inc.php';
    include_once '../../includes/student/header.inc.php';
    include_once '../../includes/student/sidebar.inc.php';

    if (isset($_GET['page'])) {
        $page = "pages/" . $_GET['page'] . ".php";

        if (file_exists($page)) {
            include_once $page;
        } else {
            header("Location: pages/404.html");
        }
    } else {
        include_once 'pages/home.php';
    }

    include_once '../../includes/student/footer.inc.php';
?>