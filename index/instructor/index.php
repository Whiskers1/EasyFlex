<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 12:36
 */

    include_once '../../includes/dbh.inc.php';
    include_once '../../includes/instructor/header.inc.php';
    include_once '../../includes/instructor/sidebar.inc.php';

    if (isset($_GET['page'])) {
        $page = "pages/" . $_GET['page'] . ".php";

        if (file_exists($page)) {
            include_once $page;
        } else {
            header("Location: pages/404.html");
            //exit();
        }
    } else {
        include_once 'pages/home.php';
    }

    include_once '../../includes/instructor/footer.inc.php';