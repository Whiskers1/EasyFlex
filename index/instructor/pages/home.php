<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 12:59
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row pb-2">
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xs-3">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>26</h1>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-success">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xs-3">
                            <i class="fab fa-stack-overflow fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>12</h1>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-warning">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>124</h1>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-danger">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xs-3">
                            <i class="far fa-life-ring fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <h1>13</h1>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-between">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h2 class="">Userlist</h2>
            <div class="table-responsive">
                <table id="dtUserList" class="table table-striped table-sm">
                    <?php include_once '../../includes/instructor/functions/php/getUserTableList.inc.php'?>
                </table>
            </div>
        </div>
        <div class="col-6">
            <h2 class="">Flex log</h2>
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
                    <?php //include_once '../../includes/instructor/functions/php/getFlexLog.inc.php'?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>