<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 08:57
 */
?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">EasyFlex Instructor</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page=test"><i class="fas fa-chart-line fa-lg"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-file-export fa-lg"></i> Management</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu1">
                            <li>
                                <a class="nav-link" href="#">*Ny/ret bruger</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Ny/ret flexkode</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Slet bruger</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Slet flexkode</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Oprydning</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports <i class="fas fa-folder-open fa-lg"></i></span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-file-export fa-lg"></i> Reports</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a class="nav-link" href="#">*Status rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Kontrol rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Ferie rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Saldo rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Bruger rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Flexkode rapport</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">*Justerings rapport</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-file-export fa-lg"></i> Current month</a>
                    </li>
                </ul>
            </div>
        </nav>


