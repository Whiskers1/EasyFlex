<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 2018-09-11
 * Time: 12:59
 */
?>

<div id="content" class="flex-fill" style="width: 100%; padding: 50px 50px;">
    <div class="row">
        <div class="col">
            <h2>Dashboard</h2>
            <div class="alert alert-secondary" role="alert">
                <h4>WIP</h4>
            </div>
        </div>
    </div>
    <div class="row">
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
</div>