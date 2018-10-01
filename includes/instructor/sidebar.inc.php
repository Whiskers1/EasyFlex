<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:57
 */
?>
<!-- Wrapper -->
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"><h4>EasyFlex Instructor</h4></a>
        </div>

        <ul class="list-unstyled components">
            <p><i class="far fa-user fa-2x"></i> Dummy Name</p>
            <li class="active">
                <a href="index.php"><i class="far fa-chart-bar fa-lg"></i> Dashboard</a>
            </li>
            <li class="">
                <a href="index.php?page=flexControl"><i class="far fa-chart-bar fa-lg"></i> Flex ind</a>
            </li>
            <li class="">
                <a href="index.php?page=flexCode"><i class="far fa-chart-bar fa-lg"></i> Flex Code</a>
            </li>
            <li class="">
                <a href="index.php?page=report"><i class="far fa-chart-bar fa-lg"></i> Report 1</a>
            </li>
            <li class="">
                <a href="index.php?page=createUser"><i class="far fa-chart-bar fa-lg"></i> Create User</a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-folder-open fa-lg"></i> Flex</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Report</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="far fa-folder-open fa-lg"></i>WIP Reports</a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">
                    <li>
                        <a href="#">Report</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../../includes/logout.inc.php" name="submit" ><i class="fas fa-sign-out-alt fa-lg"></i> Logout</a>
            </li>
        </ul>
    </nav>
    <!-- /Sidebar -->
    <!-- flex-column -->
    <div class="d-flex flex-column w-100 ">