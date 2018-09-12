<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-03
 * Time: 10:48
 */

    include_once '../../includes/logind/header.inc.php';

    if (isset($_GET['page'])) {
        $page = "pages/" . $_GET['page'] . ".php";

        if (file_exists($page)) {
            include_once $page;
        } else {
            header("Location: pages/404.html");
        }
    } else {
        include_once 'pages/logind.php';
    }

    include_once '../../includes/logind/footer.inc.php';

 ?>
