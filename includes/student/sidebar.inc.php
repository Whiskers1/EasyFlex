<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:57
 */
?>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"><h4>EasyFlex Student</h4></a>
        </div>

        <ul class="list-unstyled components">
            <p><i class="far fa-user fa-2x"></i> Dummy Name</p>
            <li class="active">
                <a href="index.php"><i class="fas fa-home fa-lg"></i> Home</a>
            </li>
            <li>
                <a href="index.php?page=saldo"><i class="far fa-hourglass fa-lg"></i> Check saldo</a>
            </li>
            <li>
                <a href="index.php?page=flex"><i class="far fa-file fa-lg"></i> Request flex</a>
            </li>
            <li>
                <a href="index.php?page=profile"><i class="far fa-user fa-lg"></i> Profile</a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-folder-open fa-lg"></i> Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../../includes/logout.inc.php" name="submit" ><i class="fas fa-sign-out-alt fa-lg"></i> Logout</a>
            </li>
        </ul>
    </nav>