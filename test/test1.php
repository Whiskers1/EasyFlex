<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-12
 * Time: 09:31
 */?>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"><h4>Bootstrap Sidebar</h4></a>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <div id="content">


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pb-5">
            <div class="row">
                <div class="col d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle"><i class="fas fa-calendar-alt fa-lg"></i> This week</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>hej</h1>
                </div>
            </div>

            <div class="row border-bottom">
                <div class="col-6">
                    <h2 class="border-bottom pb-2">Flex saldo</h2>
                    <div class="table-responsive">
                        <table id="dtFlexSaldo" class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th>UserName</th>
                                <th>Name</th>
                                <th>FlexCode</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php include_once '../../includes/instructor/functions/php/getFlexSaldo.inc.php'?>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="border-bottom pb-2">Flex log</h2>
                    <div class="table-responsive">
                        <table id="dtFlexLog" class="table table-striped table-sm" data-order='[[ 3, "desc" ]]'>
                            <thead>
                            <tr>
                                <th>UserName</th>
                                <th>Name</th>
                                <th>FlexCode</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php include_once '../../includes/instructor/functions/php/getFlexLog.inc.php'?>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </main>


        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
            <label class="custom-control-label" for="customRadioInline1">Med løntræk*</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline pb-2">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Uden løntræk*</label>
        </div>